<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\branch;
use App\Models\lab;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lab = lab::all();
        return view('labs.lab' , compact('lab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branches = branch::all();
        return view('labs.lab_add' , compact('branches')); 
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

                'labNumber'   => 'required',
                'pcsNumber'   => 'required',
                'chairsNumber'   => 'required',
                'additiveChairs'   => 'required',
                'notes'    => 'required',
                'branchId'     => 'required',
                
            ]
        );

        $request_data = $request->except(['labImg']);



        if($request->labImg){

            Image::make($request->labImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/lab/' . $request->labImg->getClientOriginalName()));

        $request_data['labImg'] = $request->labImg->getClientOriginalName();
        }
        lab::create($request_data);

        session()->flash('success',('lab added successfully'));

        return redirect('/lab');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function show(lab $lab)
    {
        $requested_lab = $lab ;
        return view('labs.lab_view' , compact('requested_lab'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function edit(lab $lab)
    {
        $requested_lab = $lab ;
        $branches = branch::all();
        return view('labs.lab_edit',compact('requested_lab' , 'branches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lab $lab)
    {
        $request->validate
        (
            [

                'labNumber'   => 'required',
                'pcsNumber'   => 'required',
                'chairsNumber'   => 'required',
                'additiveChairs'   => 'required',
                'notes'    => 'required',
                'branchId'     => 'required',
                
            ]
        );

        $request_data = $request->except(['labImg']);

        if($request->labImg){

            if($request->labImg != 'default_lab.png'){

                Storage::disk('public_uploads')->delete('/lab/' . $request->labImg);          
                
                }

                Image::make($request->labImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/lab/' . $request->labImg->getClientOriginalName()));

        $request_data['labImg'] = $request->labImg->getClientOriginalName();
        }
        $lab->fill($request_data)->save();

        session()->flash('success',('lab Edited successfully'));


        return redirect()->route('lab.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function destroy(lab $lab)
    {
        if($lab->labImg != 'default_lab.png'){

            Storage::disk('public_uploads')->delete('/lab/' . $lab->labImg);

        }
        

        $lab->delete();

        session()->flash('success',('lab Deleted successfully'));


        return redirect('/lab');
    }
}
