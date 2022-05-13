<?php

namespace App\Http\Controllers;

use App\Models\UserTransaction;
use Illuminate\Http\Request;

class UserTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $donations = UserTransaction::whereHas('paymentAccount', function ($p) {
            $p->where('user_id', auth()->user()->id);
        });

        if ($request->has('name') && !is_null($request->name)) {
            $donations->whereHas('user', function ($u) use ($request) {
                $u->where('name', 'like', '%' . $request->name . '%');
            });
        }

        if ($request->has('status') && !is_null($request->status)) {
            $donations->where('status', $request->status);
        }

        $donations = $donations->with(['user', 'paymentAccount'])->latest()->simplePaginate();

        return view('users.donations.index', compact('donations', 'request'));
    }
}
