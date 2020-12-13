<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\nationality;
use Illuminate\Http\Request;

class NationalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nationality = nationality::all();

        return view('nationality.nationality' , compact('nationality'));
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

                'nationalityName'     => 'required'
                
                
            ]
        );

        nationality::create($request->all());

        session()->flash('success',('nationality added successfully'));

        return redirect('/nationality');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function show(nationality $nationality)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function edit(nationality $nationality)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nationality $nationality)
    {
        $request->validate
        (
            [


                'nationalityName'     => 'required'
                
            ]
        );

        $nationality->fill($request->all())->save();

        session()->flash('success',('nationality Edited successfully'));


        return redirect()->route('nationality.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\nationality  $nationality
     * @return \Illuminate\Http\Response
     */
    public function destroy(nationality $nationality)
    {
        $nationality->delete();

        session()->flash('success',('nationality Deleted successfully'));


        return redirect('/nationality');
    }
}
