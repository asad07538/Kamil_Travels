<?php

namespace Modules\Excelwork\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Imports\MainLedgerImport;
use App\Imports\customerledgesrImport;
use Maatwebsite\Excel\Facades\Excel;
// use Excel;
class Importcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function mainlegerimport(Request $request) 
    {
        if ($request->hasFile('file')) {
            //
            // dd($request);
            $path = $request->file->path();
            Excel::import(new MainLedgerImport,  $path);
            return redirect()->route('excelhome')->with('success', 'All good!');
        }
    }
    public function CustomerLedgerImport(Request $request) 
    {
        ini_set('max_execution_time', 1800);
        // dd($request);
        if ($request->hasFile('file')) {
            //
            $path = $request->file->path();
            Excel::import(new customerledgesrImport, $path);
            return redirect()->route('excelhome')->with('success', 'All good!');
        }
    }

    
    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('excelwork::create');
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
        return view('excelwork::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('excelwork::edit');
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
