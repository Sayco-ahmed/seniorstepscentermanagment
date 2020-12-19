<?php

namespace App\Models;

use App\Country;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table = 'cities';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'cityName',
        'countryId',
    ];
    public function student(){
        return $this->hasMany(student::class , 'cityId' , 'id');
    }
    public function country(){
        return $this->belongsTo(Country::class , 'countryId' , 'id');
    }

}



