<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
     //main settings
     protected $table = 'roles';
     protected $primaryKey = 'id';
    
     protected $fillable = [
         'roleName',
     ];
 




    public function user(){
        return $this->hasMany(User::class , 'roleId' , 'id');
    }
}
