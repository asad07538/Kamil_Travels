<?php

namespace Modules\Common\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CommonController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('common::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('common::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $request->validate(  [          
            'name' => 'required',
            'code' => 'required',
            'dialing_code' => 'required',
        ]);

        Country::create('name'=>$request->name,
            'code'=>$request->code,
            'dialing_code'=>$request->dialing_code);

        return redirect()->route('countries');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('common::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $country=Country::find($id);
        return view('common::edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate(  [          
            'name' => 'required',
            'code' => 'required',
            'dialing_code' => 'required',
        ]);

        $country=Country::find($request->id);
        $country->name=$request->name;
        $country->code=$request->code;
        $country->dialing_code=$request->dialing_code;
        $country->save();

        return redirect()->route('countries');
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
        $country=Country::find($id);
        $country->delete();
        return redirect()->route('countries');
    }
}
