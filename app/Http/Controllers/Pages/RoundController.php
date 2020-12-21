<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\course;
use App\Models\lab;
use App\Models\round;
use App\Models\trainer;
use Illuminate\Http\Request;

class RoundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $round = round::all();
        return view('rounds.round' , compact('round'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $allcourses = course::all();
        $alllabs    = lab::all();
        $trainers = trainer::all();
        return view('rounds.round_add' , compact('allcourses' , 'alllabs' , 'trainers'));
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
                'courseId'   => 'required',
                'labId'   => 'required',
                'roundName'   => 'required',
                'roundStartDate'   => 'required',
                'roundEndDate'    => 'required',
                'roundStatusId'     => 'required',
                'roundFees'      => 'required',
                'roundNotes'      => 'required',
                'trainerId'     => 'required',
                // 'stdRndRequestsId'    => 'required',
               
            ]
        );

        $currentround = round::create($request->all());

        $curentid = round::find($currentround->id) ;

        $trainersid = $request->trainerId ;
     

        $curentid->trainers()->attach($trainersid);

        session()->flash('success',('round added successfully'));

        return redirect('/round');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\round  $round
     * @return \Illuminate\Http\Response
     */
    public function show(round $round)
    {
        $requested_round = $round ;
        return view('rounds.round_view' , compact('requested_round'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\round  $round
     * @return \Illuminate\Http\Response
     */
    public function edit(round $round)
    {
        $allcourses = course::all();
        $alllabs    = lab::all();

        $requested_round = $round ;
        return view('rounds.round_edit',compact('requested_round' , 'allcourses' , 'alllabs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\round  $round
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, round $round)
    {
        $request->validate
        (
            [
                'courseId'   => 'required',
                'labId'   => 'required',
                'roundName'   => 'required',
                'roundStartDate'   => 'required',
                'roundEndDate'    => 'required',
                'roundStatusId'     => 'required',
                // 'roundFees'      => 'file|max:51200|mimes:doc,docx,pdf',
                'roundNotes'      => 'required',
                // 'stdRndRequestsId'    => 'required',
               
            ]
        );

        $round->fill($request->all())->save();

        session()->flash('success',('round Edited successfully'));


        return redirect()->route('round.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\round  $round
     * @return \Illuminate\Http\Response
     */
    public function destroy(round $round)
    {
        $round->delete();

        session()->flash('success',('round Deleted successfully'));


        return redirect('/round');
    }
}
