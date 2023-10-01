<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Account;
use Illuminate\Http\Request;

class AccountsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $account = Account::latest()->first();
        return view('dashboard.account.index',[
            'account' =>$account,
        ]);
    }

    public function updateData(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'phone' => 'required',
            'fax' => 'required',

        ]);

        $privacy = Account::first();
        $privacy->update([
            'email' => $request->email,
            'phone' => $request->phone,
            'fax' => $request->fax,
        ]);

        return redirect()->route('account.index')->with('msg', 'Account Updated Successfully')->with('type', 'success');
    }

}
