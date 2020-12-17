<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reach_source extends Model
{
    protected $table = 'reach_sources';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'reachSourceText'
        
    ];

         
    public function student(){
        return $this->hasMany(student::class , 'reachSourceId' , 'id');
    }
}
