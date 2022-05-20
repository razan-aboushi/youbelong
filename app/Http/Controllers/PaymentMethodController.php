<?php

namespace App\Http\Controllers;

use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $payment_methods = PaymentMethod::query();

        if ($request->has('name') && !is_null($request->name)) {
            $payment_methods->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->has('status') && !is_null($request->status)) {
            $payment_methods->where('status', $request->status);
        }

        if ($request->has('from_date') && !is_null($request->from_date)) {
            $payment_methods->whereDate('created_at', '>=', $request->from_date);
        }

        if ($request->has('to_date') && !is_null($request->to_date)) {
            $payment_methods->whereDate('created_at', '<=', $request->to_date);
        }

        $payment_methods = $payment_methods->latest()->get();

        return view('users.payment-methods.index', compact('payment_methods', 'request'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.payment-methods.create');
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
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['required', 'mimes:jpg,jpeg,bmp,png,gif'],
            'status' => ['required', 'in:0,1'],
        ]);

        if ($request->hasFile('logo')) {
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $request->file('logo')->storeAs('public/uploads', $fileNameToStore);
            $validated['logo'] = $fileNameToStore;
        }

        PaymentMethod::create($validated);
        return redirect()->route('payment-methods.index')->with('message', 'The payment method has been created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $payment_method = PaymentMethod::findOrFail($id);

        return view('users.payment-methods.edit', compact('payment_method'));
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
        $payment_method = PaymentMethod::findOrFail($id);

        $validated = $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['nullable', 'mimes:jpg,jpeg,bmp,png,gif'],
            'status' => ['required', 'in:0,1'],
        ]);

        if ($request->hasFile('logo')) {
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = time() . '.' . $extension;
            $request->file('logo')->storeAs('public/uploads', $fileNameToStore);
            $payment_method->logo = $fileNameToStore;
        }

        $payment_method->name = $validated['name'];
        $payment_method->status = $validated['status'];
        $payment_method->save();
        return redirect()->route('payment-methods.index')->with('message', 'The payment method has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $payment_method = PaymentMethod::findOrFail($id);
        $payment_method->delete();

        return redirect()->route('payment-methods.index')->with('message', 'The payment method has been deleted successfully!');
    }
}
