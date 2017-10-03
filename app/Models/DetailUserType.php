<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailUserType extends Model
{
    //
    protected $table = 'detail_user_types';
    protected $fillable = ['people_id','type_user_id'];
    protected $guarded = ['id'];

    
    public function people(){
    	return $this->belongsTo(People::class);
    }

    public function typeUser(){
    	return $this->belongsTo(TypeUser::class);
    }
}

