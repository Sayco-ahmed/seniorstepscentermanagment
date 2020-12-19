<?php

namespace App\Models;
use app\Country;
use App\University;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\UnintentionallyCoveredCodeError;

class student extends Model
{
     //main settings
     protected $table = 'students';
     protected $primaryKey = 'id';
    
     protected $fillable = [
         'fullNameAr',
         'fullNameEn',
         'mobile',
         'whatsapp',
         'education',
         'cityId',
         'countryId',
         'facultyId',
         'studentStatusId',
         'unversityId',
         'nationalityId',
         'reachSourceId',
         'email',
         'job',
         'company',
         'address',
         'birthdate',
         'facebookAccnt',
         'notes'
     ];
 
     public function city (){
        return $this->belongsTo(city::class , 'cityId');
     }

     public function country (){
        return $this->belongsTo(country::class , 'countryId');
     }

     public function faculty (){
        return $this->belongsTo(faculty::class , 'facultyId');
     }
     
     public function studentStatus (){
        return $this->belongsTo(student_status::class , 'studentStatusId');
     }
          
     public function unversity (){
        return $this->belongsTo(University::class , 'unversityId');
     }
               
     public function nationality (){
        return $this->belongsTo(nationality::class , 'nationalityId');
     }
                    
     public function reachSource (){
        return $this->belongsTo(reach_source::class , 'reachSourceId');
     }
}
