<?php

namespace App\Models;
use App\Models\trainer;
use Illuminate\Database\Eloquent\Model;

class round extends Model
{
    protected $table = 'rounds';
    protected $primaryKey = 'id';
   
    protected $fillable = [
        'courseId',
        'labId',
        'roundName',
        'roundStartDate',
        'roundEndDate',
        'roundStatusId',
        'roundFees',
        'roundNotes',
        

        'stdRndRequestsId'
        
    ];

    public function course(){
        return $this->belongsTo(course::class , 'courseId' );
    }

    public function lab (){
        return $this->belongsTo(lab::class , 'labId');
    }

    public function trainers (){
        return $this->belongsToMany(trainer::class , 'round_trainer' , 'roundId' , 'trainerId');
    }

}
