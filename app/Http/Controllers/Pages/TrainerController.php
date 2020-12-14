<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\round;
use App\Models\trainer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = trainer::all();
        return view('trainer.trainer' , compact('trainers')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainer.trainer_add'); 
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
                'trainer_en_name'   => 'required',
                'trainer_ar_name'   => 'required',
                'trainer_mobile'   => 'required|min:11',
                'trainer_mobile2'   => 'min:11',
                'trainer_birthdate'    => 'required',
                'trainer_address'     => 'required',
                'trainerCV'      => 'file|max:512000|mimes:doc,docx,pdf',
                'trainerImg'      => 'image',
                'trainerSeniorCV'    => 'file|max:512000|mimes:doc,docx,pdf',
                'trainerCompany'    => 'required',
                'trainerJob'    => 'required',
                'trainerLinkedinUrl'    => 'required',
                'trainerYoutubeUrl'    => 'required',
                'trainerNotes'    => 'required',
                'active'    => 'required',
                'trainerFbUrl'         => 'required'
            ]
        );

        $request_data = $request->except(['trainerImg' , 'trainerSeniorCV' , 'trainerCV']);



        if($request->trainerImg){

            Image::make($request->trainerImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/trainer/' . $request->trainerImg->getClientOriginalName()));

        $request_data['trainerImg'] = $request->trainerImg->getClientOriginalName();
        }

        if($request->file('trainerSeniorCV')){
            $destinationPath = 'uploads/trainer/trainer_files/'; 
            $profilefile =  $request->file('trainerSeniorCV')->getClientOriginalName();
            $request->file('trainerSeniorCV')->move($destinationPath, $profilefile);
            $request_data['trainerSeniorCV'] = $request->trainerSeniorCV->getClientOriginalName();
        }

        if($request->file('trainerCV')){
            $destinationPath = 'uploads/trainer/trainer_files/'; 
            $profilefile =  $request->file('trainerCV')->getClientOriginalName();
            $request->file('trainerCV')->move($destinationPath, $profilefile);
            $request_data['trainerCV'] = $request->trainerCV->getClientOriginalName();
        }

        trainer::create($request_data);

        session()->flash('success',('trainer added successfully'));

        return redirect('/trainer');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function show(trainer $trainer)
    {
        $requested_trainer = $trainer ;
        $allrounds = round::all();
        return view('trainer.trainer_view' , compact('requested_trainer' , 'allrounds'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function edit(trainer $trainer)
    {
        $requested_trainer = $trainer ;
        return view('trainer.trainer_edit',compact('requested_trainer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trainer $trainer)
    {
        $request->validate
        (
            [
                'trainer_en_name'   => 'required',
                'trainer_ar_name'   => 'required',
                'trainer_mobile'   => 'required|min:11',
                'trainer_mobile2'   => 'min:11',
                'trainer_birthdate'    => 'required',
                'trainer_address'     => 'required',
                'trainerCV'      => 'file|max:512000|mimes:doc,docx,pdf',
                'trainerImg'      => 'image',
                'trainerSeniorCV'    => 'file|max:512000|mimes:doc,docx,pdf',
                'trainerCompany'    => 'required',
                'trainerJob'    => 'required',
                'trainerLinkedinUrl'    => 'required',
                'trainerYoutubeUrl'    => 'required',
                'trainerNotes'    => 'required',
                'active'    => 'required',
                'trainerFbUrl'         => 'required'
            ]
        );

        $request_data = $request->except(['trainerImg' , 'trainerSeniorCV' , 'trainerCV']);

        if($request->trainerImg){

            if($request->trainerImg != 'default_trainer.png'){

                Storage::disk('public_uploads')->delete('/trainer/' . $request->trainerImg);          
                
                }

                Image::make($request->trainerImg)->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();

        })->save(public_path('uploads/trainer/' . $request->trainerImg->getClientOriginalName()));

        $request_data['trainerImg'] = $request->trainerImg->getClientOriginalName();
        }


        if($request->file('trainerSeniorCV')){
            
            if($request->file('trainerSeniorCV')->getClientOriginalName() != $trainer->trainerSeniorCV){
                Storage::disk('public_uploads')->delete('/trainer/trainer_files/' . $trainer->trainerSeniorCV);
                $destinationPath = 'uploads/trainer/trainer_files/'; 
                $profilefile =  $request->file('trainerSeniorCV')->getClientOriginalName();
                $request->file('trainerSeniorCV')->move($destinationPath, $profilefile);
                $request_data['trainerSeniorCV'] = $request->trainerSeniorCV->getClientOriginalName();
            }
           
        }

        if($request->file('trainerCV')){
            
            if($request->file('trainerCV')->getClientOriginalName() != $trainer->trainerCV){
                Storage::disk('public_uploads')->delete('/trainer/trainer_files/' . $trainer->trainerCV);
                $destinationPath = 'uploads/trainer/trainer_files/'; 
                $profilefile =  $request->file('trainerCV')->getClientOriginalName();
                $request->file('trainerCV')->move($destinationPath, $profilefile);
                $request_data['trainerCV'] = $request->trainerCV->getClientOriginalName();
            }
           
        }
       
        $trainer->fill($request_data)->save();

        session()->flash('success',('trainer Edited successfully'));


        return redirect()->route('trainer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trainer  $trainer
     * @return \Illuminate\Http\Response
     */
    public function destroy(trainer $trainer)
    {
        if($trainer->trainerImg != 'default_trainer.png'){

            Storage::disk('public_uploads')->delete('/trainer/' . $trainer->trainerImg);

        }
        Storage::disk('public_uploads')->delete('/trainer/trainer_files/' . $trainer->trainerCV);
        Storage::disk('public_uploads')->delete('/trainer/trainer_files/' . $trainer->trainerSeniorCV);

        $trainer->delete();

        session()->flash('success',('trainer Deleted successfully'));


        return redirect('/trainer');
    }
}
