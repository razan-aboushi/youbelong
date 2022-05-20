<?php

namespace App\Http\Controllers;

use App\Models\PaymentAccount;
use App\Models\PaymentMethod;
use App\Models\UserTransaction;
use Illuminate\Http\Request;

class UserTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Respons1e
     */
    public function index(Request $request)
    {
        $donations = UserTransaction::query();

        if (!auth()->user()->can('is-admin')) {
            $donations = $donations->whereHas('paymentAccount', function ($p) {
                $p->where('user_id', auth()->user()->id);
            });
        }

        if ($request->has('name') && !is_null($request->name)) {
            $donations->whereHas('user', function ($u) use ($request) {
                $u->where('name', 'like', '%' . $request->name . '%');
            });
        }

        if ($request->has('status') && !is_null($request->status)) {
            $donations->where('status', $request->status);
        }

        if ($request->has('from_date') && !is_null($request->from_date)) {
            $donations->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->has('to_date') && !is_null($request->to_date)) {
            $donations->whereDate('created_at', '<=', $request->to_date);
        }

        $donations->with(['user', 'paymentAccount.user'])->latest();

        $donations = $donations->get();

        return view('users.donations.index', compact('donations', 'request'));
    }

    public function donate($payment_id)
    {
        $payment_account = PaymentAccount::with(['paymentMethod'])->findOrFail($payment_id);

        return view('users.donations.donate', compact('payment_account'));
    }

    public function storeDonate(Request $request, $payment_id)
    {
        $payment_method = PaymentAccount::with('paymentMethod')->findOrFail($payment_id);

        $payment_method_name = $payment_method->paymentMethod->name;

        $rules = [
            'holder_name' => ['nullable'],
            'expiry_month' => ['nullable'],
            'expiry_year' => ['nullable'],
            'ccv' => ['nullable'],

            'account_number' => ['required'],
            'amount' => ['required', 'numeric', 'gt:0'],
            'anonymes' => ['nullable', 'in:0,1'],
        ];

        # account number validation
        if ($payment_method_name == 'Qlik') {
            $account_number_rule = 'regex:/^\+(?:[0-9]?){6,14}[0-9]$/';
        } else if ($payment_method_name == 'PayPal') {
            $account_number_rule = "email";
        } else if ($payment_method_name == 'Credit Card') {
            $account_number_rule = "regex:/^(?:4[0-9]{12}(?:[0-9]{3})?|[25][1-7][0-9]{14}|6(?:011|5[0-9][0-9])[0-9]{12}|3[47][0-9]{13}|3(?:0[0-5]|[68][0-9])[0-9]{11}|(?:2131|1800|35\d{3})\d{11})$/";
            array_push($rules['holder_name'], ['required', 'max:255']);
            array_push($rules['ccv'], ['required', 'numeric', 'digits:3']);
            array_push($rules['expiry_month'], ['required', 'numeric', 'digits:2']);
            array_push($rules['expiry_year'], ['required', 'numeric', 'digits:4']);
        } else {
            $account_number_rule = 'regex:/^\d{9,18}$/';
        }
        array_push($rules['account_number'], $account_number_rule);

        $validated = $this->validate($request, $rules);

        # random feedback from the payment method becoase we dont have a wekhook
        $status = rand(0, 1);

        if ($status) {
            UserTransaction::create([
                'user_id' => !$request->anonymes ? auth()->user()->id : null,
                'payment_account_id' => $payment_id,
                'amount' => $validated['amount'],
                'status' => $status,
            ]);
        }

        if ($status) {
            $message = "Your payment has been procceed successfully!";
        } else {
            $message = "Your payment has been rejected!";
        }

        return back()->with('message', $message);
    }
}
