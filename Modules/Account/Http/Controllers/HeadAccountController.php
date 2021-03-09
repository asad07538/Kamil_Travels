<?php

namespace Modules\Account\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Account\Entities\AccountHead;

class HeadAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $head_accounts=AccountHead::where('level_id',2)->get();
        return view('account::head_accounts.index',compact('head_accounts'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('account::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $head_account=AccountHead::find($id);
        return view('account::head_accounts.show',compact('head_account'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $head_account=AccountHead::find($id);
        $root_accounts=AccountHead::where('level_id',1)->get();
        return view('account::head_accounts.edit',compact('root_accounts','head_account'));
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
        $head_account=AccountHead::find($request->id);
        $head_account->title=$request->title;
        $head_account->parent_id=$request->root_account;
        $head_account->save();

        return redirect()->route('head_accounts_show',$head_account->id);

    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
