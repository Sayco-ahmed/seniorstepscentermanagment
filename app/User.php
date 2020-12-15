<?php

namespace App;

use App\Models\branch;
use App\Models\role;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'userMobile',
          'userName',
          'userPassword',
          'userFullName',
          'userImg',
          'branchId',
          'roleId',
          
    ];
    protected $table = 'users';
    protected $primaryKey = 'id';
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'userPassword', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['image_path'] ;

    public function getImagePathAttribute(){


        return asset('uploads/users/' . $this->userImg);
    }
    
    public function branch (){
        return $this->belongsTo(branch::class , 'branchId');
     }

     public function role (){
        return $this->belongsTo(role::class , 'roleId');
     }

}
