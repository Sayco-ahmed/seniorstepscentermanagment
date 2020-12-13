<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //main settings
    protected $table = 'courses';
    protected $primaryKey = 'id';
   
    protected $fillable = [
        'courseEnName',
        'courseArName',
        'courseArDesc',
        'courseEnDesc',
        'courseHours',
        'courseFees',
        'coursePdf',
        'courseImg',
        'courseNotes',
        'active'
    ];

    // protected $attributes = [
    //     'branchImg' => ['default_branch.png']
    // ];

    protected $appends = ['image_path'] ;

    public function getImagePathAttribute(){


        return asset('uploads/courses/' . $this->courseImg);
    }

    public function round(){
        return $this->hasMany(round::class , 'courseId' , 'id');
    }

}
