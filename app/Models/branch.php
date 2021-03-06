<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class branch extends Model
{
    
    //main settings
    protected $table = 'branches';
    protected $primaryKey = 'id';
   
    protected $fillable = [
        'branchCode',
        'branchName',
        'branchAddress',
        'branchMapUrl',
        'branchImg'
    ];

    // protected $attributes = [
    //     'branchImg' => ['default_branch.png']
    // ];

    protected $appends = ['image_path'] ;

    public function getImagePathAttribute(){


        return asset('uploads/branch/' . $this->branchImg);
    }

    public function Lab(){
        return $this->hasMany(lab::class , 'branchId' , 'id');
    }

    public function user(){
        return $this->hasMany(User::class , 'branchId' , 'id');
    }
}
