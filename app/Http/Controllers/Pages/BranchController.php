<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\branch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BranchController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branch = branch::all();
        return view('branches.branch' , compact('branch'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branches.branch_add');
        
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
                'branchCode'     => 'required',
                'branchName'     => 'required',
                'branchAddress'  => 'required',  
                'branchImg'      => 'image'
            ]
        );

        $request_data = $request->except(['branchImg']);



        if($request->branchImg){

            Image::make($request->branchImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/branch/' . $request->branchImg->getClientOriginalName()));

        $request_data['branchImg'] = $request->branchImg->getClientOriginalName();
    }
        branch::create($request_data);

        session()->flash('success',('Branch added successfully'));

        return redirect('/branch');

    
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(branch $branch)
    {
        $requested_branch = $branch ;
        return view('branches.branch_view' , compact('requested_branch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(branch $branch)
    {
        $requested_branch = $branch ;
        return view('branches.branch_edit',compact('requested_branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, branch $branch)
    {
        $request->validate
        (
            [
                'branchCode'     => 'required',
                'branchName'     => 'required',
                'branchAddress'  => 'required',
                
                'branchImg'      => 'image'
            ]
        );

        $request_data = $request->except(['branchImg']);

        if($request->branchImg){

            if($branch->branchImg != 'default_branch.png'){

            Storage::disk('public_uploads')->delete('/branch/' . $branch->branchImg);          
            
            }


            Image::make($request->branchImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/branch/' . $request->branchImg->getClientOriginalName()));

        $request_data['branchImg'] = $request->branchImg->getClientOriginalName();
           
    }
        
        
        $branch->fill($request_data)->save();

        session()->flash('success',('Branch Edited successfully'));


        return redirect()->route('branch.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(branch $branch)
    {

        if($branch->branchImg != 'default_branch.png'){

            Storage::disk('public_uploads')->delete('/branch/' . $branch->branchImg);

        }

        $branch->delete();

        session()->flash('success',('Branch Deleted successfully'));


        return redirect('/branch');
    }
}
