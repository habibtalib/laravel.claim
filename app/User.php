<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\TrMessages;

class User extends Authenticatable
{
    use Notifiable;

   protected $appends = array('UrlAvatar');

    // protected $fillable = [
    //     'name', 'email', 'password','token','verified','chat_status',
    //     'middlename', 'lastname', 'address','mobile','active','notes','avatar','last_login','designation'
    // ];

    protected  $table = 'tbl_claim';
    protected $guarded = ['id'];


    protected $hidden = [
        'password','remember_token',
    ];

    public function getUrlAvatarAttribute(){
        return asset("upload/avatars")  . '/' . $this->avatar ; 
    }

}
