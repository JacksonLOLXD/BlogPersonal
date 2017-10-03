<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class People extends Model
{
    //
    protected $table = 'peoples';
    protected $fillable = ['first_name','last_name','birth_date', 'gender_id','user_id'];
    protected $guarded = ['id'];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function gender(){
    	return $this->belongsTo(Gender::class);
    }
}
