<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    //
    protected $table = 'genders';
    protected $fillable = ['name_gender'];
    protected $guarded = ['id'];

    public function peoples(){
    	return $this->hasMany(People::class);
    }
}
