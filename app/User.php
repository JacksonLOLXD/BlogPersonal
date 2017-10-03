<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\TypeUser;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    protected $fillable = ['nick_name','email', 'password','type_user_id'];
    protected $guarded = ['id'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function typeUser(){
    	return $this->belongsTo(TypeUser::class);
    }
}
