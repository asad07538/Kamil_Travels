<?php

namespace Modules\Bank\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Bank\Entities\BankAccounts;
use Modules\Bank\Entities\Bank;
use Modules\Account\Entities\AccountHead;
use Illuminate\Support\Facades\Auth;
class BankAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $bank_accounts=BankAccounts::all();
        return view('bank::bank_account.index',compact('bank_accounts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create($id)
    {
        $bank=Bank::find($id);
        return view('bank::bank_account.create',compact('bank'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $request->validate([          
            'title' => 'required',
            'account_no' => 'required',
            'bank' => 'required',
            'branch' => 'required',
        ]);
        $user=Auth::user();
        $account=AccountHead::create(['title'=>$request->title,
            'level_id'=>3,
            'parent_id'=>5,
            'added_by'=>$user->id,
        ]);
       $bank=BankAccounts::create([
            'title'=>$request->title,
            'account_no'=>$request->account_no,
            'bank_id'=>$request->bank,
            'branch'=>$request->branch,
            'account_head_id'=>$account->id,
        ]); 
       // dd($request);
       return redirect()->route('bank_show',$request->bank);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {

        $bank_account=BankAccounts::find($id);
        return view('bank::bank_account.show',compact('bank_account'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $banks=Bank::all();
        $bank_account=BankAccounts::find($id);
        return view('bank::bank_account.edit',compact('banks','bank_account'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request)
    {
        //
        $request->validate([          
            'id' => 'required',
            'title' => 'required',
            'account_no' => 'required',
            'bank' => 'required',
            'branch' => 'required',
        ]);
        $bank=BankAccounts::find($request->id);
        $bank->title=$request->title;
        $bank->account_no=$request->account_no;
        $bank->bank_id=$request->bank;
        $bank->branch=$request->branch;
        $bank->save();
        return redirect()->route('bank_accounts');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        $bank=BankAccounts::find($id);
        $bank->delete();
        return redirect()->route('bank_accounts');
    }
}
