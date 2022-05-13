<?php

namespace App\Http\Controllers;

use App\Helpers\CsvExport;
use App\Models\PaymentAccount;
use App\Models\UserTransaction;
use Illuminate\Http\Request;

class UserTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Respons1e
     */
    public function index(Request $request, $export = 0)
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

        $donations->with(['user', 'paymentAccount.user'])->latest();

        if ($export) {
            return $donations;
        }

        $donations = $donations->simplePaginate();

        return view('users.donations.index', compact('donations', 'request'));
    }

    public function donate($payment_id)
    {
        $payment_account = PaymentAccount::with(['paymentMethod'])->findOrFail($payment_id);

        return view('users.donations.donate', compact('payment_account'));
    }

    public function storeDonate(Request $request, $payment_id)
    {
        $validated = $this->validate($request, [
            'amount' => ['required', 'numeric', 'gt:0'],
        ]);

        # random feedback from the payment method becoase we dont have a wekhook
        $status = rand(0, 1);

        UserTransaction::create([
            'user_id' => auth()->user()->id,
            'payment_account_id' => $payment_id,
            'amount' => $validated['amount'],
            'status' => $status,
        ]);

        if ($status) {
            $message = "Your payment has been procceed successfully!";
        } else {
            $message = "Your payment has been rejected!";
        }

        return back()->with('message', $message);
    }

    public function export(Request $request)
    {
        $donations = $this->index($request, 1)->get();

        $array_data = [];
        $loop = 0;
        foreach ($donations as $donate) {
            $array_data[$loop] = [
                'ID' => ++$loop,
                'Name' => $donate->user->name,
                'Carehome' => $donate->paymentAccount->user->name,
                'Payment method' => $donate->paymentAccount->paymentMethod->name,
                'Amount' => $donate->amount . " JOD",
                'Status' => $donate->status ? 'Approved' : 'Rejected',
            ];
        }

        CsvExport::put($array_data);
        return redirect()->back();
    }
}
