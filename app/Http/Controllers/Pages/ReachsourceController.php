<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\reach_source;
use Illuminate\Http\Request;

class ReachsourceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reach_source = reach_source::all();

        return view('reach_source.reach_source' , compact('reach_source'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate
        (
            [

                'reachSourceText'     => 'required'
                
                
            ]
        );

        reach_source::create($request->all());

        session()->flash('success',('reach_source added successfully'));

        return redirect('/reach_source');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reach_source  $reach_source
     * @return \Illuminate\Http\Response
     */
    public function show(reach_source $reach_source)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reach_source  $reach_source
     * @return \Illuminate\Http\Response
     */
    public function edit(reach_source $reach_source)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reach_source  $reach_source
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reach_source $reach_source)
    {
        $request->validate
        (
            [


                'reachSourceText'     => 'required'
                
            ]
        );

        $reach_source->fill($request->all())->save();

        session()->flash('success',('reach_source Edited successfully'));


        return redirect()->route('reach_source.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reach_source  $reach_source
     * @return \Illuminate\Http\Response
     */
    public function destroy(reach_source $reach_source)
    {
        $reach_source->delete();

        session()->flash('success',('reach_source Deleted successfully'));


        return redirect('/reach_source');
    }
}
