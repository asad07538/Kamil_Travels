<?php

namespace Modules\Bank\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Bank\Entities\Bank;
class BankController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // return view('bank::index');

        $banks=Bank::all();
        return view('bank::bank.index',compact('banks'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('bank::bank.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
        $request->validate(  [          
            'bank_name' => 'required',
        ]);
       $bank=Bank::create([
            'name'=>$request->bank_name,
        ]);
       return redirect()->route('bank_index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $bank=Bank::find($id);
        return view('bank::bank.show',compact('bank'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $bank=Bank::find($id);
        return view('bank::bank.edit',compact('bank'));
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
        $request->validate(  [          
            'id' => 'required',
            'bank_name' => 'required',
        ]);
       $bank=Bank::find($request->id);
       $bank->name=$request->bank_name;
       $bank->save();
       return redirect()->route('bank_index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //        
        $bank=Bank::find($id);
        $bank->delete();
        return redirect()->route('bank_index');
    }
}
