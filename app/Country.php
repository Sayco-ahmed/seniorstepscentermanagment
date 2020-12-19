<?php
namespace App;

use App\Models\city;
use App\Models\student;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $table = 'countries';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'short_code',
    ];

    public function city(){
        return $this->hasMany(city::class , 'countryId' , 'id');
    }

    public function student(){
        return $this->hasMany(student::class , 'countryId' , 'id');
    }
}