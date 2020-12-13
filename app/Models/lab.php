<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class lab extends Model
{
     //main settings
     protected $table = 'labs';
     protected $primaryKey = 'id';
    
     protected $fillable = [
         'labNumber',
         'pcsNumber',
         'chairsNumber',
         'additiveChairs',
         'labImg',
         'notes',
         'branchId',
         
     ];

     protected $appends = ['image_path'] ;

     public function getImagePathAttribute(){
 
 
         return asset('uploads/lab/' . $this->labImg);


         
     }

     public function Branch (){
        return $this->belongsTo(branch::class , 'branchId');
     }

     public function round(){
        return $this->hasMany(round::class , 'labId' , 'id');
    }
}
