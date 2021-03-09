<?php

namespace Modules\Excelwork\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Excelwork\Entities\mainledger;
use Modules\Excelwork\Entities\customerledger;
class Searchcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function search()
    {
        ini_set('max_execution_time', 1800);
        $main=mainledger::all();
        $customerledger=customerledger::all();
        
        foreach ($main as $key => $ma) {
            if ($ma->co == "Void") {
                    $ma->found=1;
                    $ma->save();
            }
        }
        foreach ($main as $key => $ma) {
            foreach ($customerledger as $key => $customer) {
                if ($ma->ticket_no == $customer->ticket_no) {
                    $ma->found=1;
                    $ma->save();
                }
            }
        }
        return redirect()->route('excelhome')->with('success', 'Search Success!');
        // return view('excelwork::index');
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
