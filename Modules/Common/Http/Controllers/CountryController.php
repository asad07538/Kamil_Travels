<?php

namespace Modules\Common\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Illuminate\Support\Facades\DB;
use Modules\Common\entities\Country;
class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // $countries=Country::all()->paginate(15);
        $countries=DB::table('countries')->paginate(2);
        return view('common::country.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('common::country.create');
    }
    public function store(Request $request)
    {
        $request->validate(  [          
            'name' => 'required|unique:countries',
            'code' => 'required|unique:countries',
            'dialing_code' => 'required|min:3',
        ]);

        Country::create([
            'name'=>$request->name,
            'code'=>$request->code,
            'dialing_code'=>$request->dialing_code]);

        return redirect()->route('countries');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('common::country.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $country=Country::find($id);
        return view('common::country.edit',compact('country'));
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
            'name' => 'required',
            // 'name' => 'required|unique:countries',
            // 'code' => 'required|unique:countries',
            'code' => 'required',
            'dialing_code' => 'required|min:3',
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
