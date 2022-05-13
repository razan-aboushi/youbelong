<?php

namespace App\Http\Controllers;

use App\Models\PaymentAccount;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $payment_accounts = PaymentAccount::query()->where('user_id', auth()->user()->id);

        if ($request->has('account_number') && !is_null($request->account_number)) {
            $payment_accounts->where('account_number', $request->account_number);
        }

        if ($request->has('status') && !is_null($request->status)) {
            $payment_accounts->where('status', $request->status);
        }

        $payment_accounts = $payment_accounts->with(['paymentMethod'])->latest()->simplePaginate();

        return view('users.payment-accounts.index', compact('payment_accounts', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $payment_methods = PaymentMethod::where('status', '1')->pluck('name', 'id')->toArray();
        return view('users.payment-accounts.create', compact('payment_methods'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $this->validate($request, [
            'payment_method_id' => ['required', 'exists:payment_methods,id'],
            'account_number' => ['required', 'unique:payment_accounts'],
            'status' => ['required', 'in:0,1'],
        ]);

        $validated['user_id'] = auth()->user()->id;

        PaymentAccount::create($validated);
        return redirect()->route('payment-accounts.index')->with('message', 'The payment account has been created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment_account = PaymentAccount::findOrFail($id);

        abort_if($payment_account->user_id != auth()->user()->id, 403);

        $payment_methods = PaymentMethod::where('status', '1')->pluck('name', 'id')->toArray();

        return view('users.payment-accounts.edit', compact('payment_account', 'payment_methods'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $payment_account = PaymentAccount::findOrFail($id);

        abort_if($payment_account->user_id != auth()->user()->id, 403);

        $validated = $this->validate($request, [
            'payment_method_id' => ['required', 'exists:payment_methods,id'],
            'account_number' => ['required', 'unique:payment_accounts,account_number,' . $id],
            'status' => ['required', 'in:0,1'],
        ]);

        $payment_account->payment_method_id = $validated['payment_method_id'];
        $payment_account->account_number = $validated['account_number'];
        $payment_account->status = $validated['status'];
        $payment_account->save();
        return redirect()->route('payment-accounts.index')->with('message', 'The payment account has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment_account = PaymentAccount::findOrFail($id);

        abort_if($payment_account->user_id != auth()->user()->id, 403);

        $payment_account->delete();

        return redirect()->route('payment-accounts.index')->with('message', 'The payment account has been deleted successfully!');
    }
}
