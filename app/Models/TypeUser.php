<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class TypeUser extends Model
{
    //
    protected $table = 'type_users';
    protected $fillable = ['name_type_user'];
    protected $guarded = ['id'];
    
    public function users(){
    	return $this->hasMany(User::class);
    }
}
