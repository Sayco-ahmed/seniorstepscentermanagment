<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\student_status;
use Illuminate\Http\Request;

class StudentstatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student_status = student_status::all();

        return view('student_status.student_status' , compact('student_status'));
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

                'statusName'     => 'required'
                
                
            ]
        );

        student_status::create($request->all());

        session()->flash('success',('student_status added successfully'));

        return redirect('/student_status');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student_status  $student_status
     * @return \Illuminate\Http\Response
     */
    public function show(student_status $student_status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student_status  $student_status
     * @return \Illuminate\Http\Response
     */
    public function edit(student_status $student_status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student_status  $student_status
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, student_status $student_status)
    {
        $request->validate
        (
            [


                'statusName'     => 'required'
                
            ]
        );

        $student_status->fill($request->all())->save();

        session()->flash('success',('student_status Edited successfully'));


        return redirect()->route('student_status.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student_status  $student_status
     * @return \Illuminate\Http\Response
     */
    public function destroy(student_status $student_status)
    {
        $student_status->delete();

        session()->flash('success',('student_status Deleted successfully'));


        return redirect('/student_status');
    }
}
