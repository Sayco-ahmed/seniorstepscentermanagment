<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class trainer extends Model
{
        //main settings
        protected $table = 'trainers';
        protected $primaryKey = 'id';
       
        protected $fillable = [
            'trainer_en_name',
            'trainer_ar_name',
            'trainer_mobile',
            'trainer_mobile2',
            'trainer_birthdate',
            'trainer_address',
            'trainerCV',
            'trainerSeniorCV',
            'trainerFbUrl',
            'trainerYoutubeUrl',
            'trainerLinkedinUrl',
            'trainerJob',
            'trainerCompany',
            'trainerImg',
            'trainerNotes',
            'active'
        ];
    
        // protected $attributes = [
        //     'branchImg' => ['default_branch.png']
        // ];
    
        protected $appends = ['image_path'] ;
    
        public function getImagePathAttribute(){
            return asset('uploads/trainer/' . $this->trainerImg);
        }

        
        public function rounds (){
            return $this->belongsToMany(round::class , 'round_trainer' ,  'trainerId' , 'roundId' );
        }

    
}
