<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class nationality extends Model
{
    protected $table = 'nationalities';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'nationalityName'
    ];
     
    public function student(){
        return $this->hasMany(student::class , 'nationalityId' , 'id');
    }
}
