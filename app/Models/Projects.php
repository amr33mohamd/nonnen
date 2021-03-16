<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
    public function messages(){

         return $this->hasMany(Messages::class,'project_id','id');

    }
    public function user(){

         return $this->belongsTo(User::class,'user_id','id');

    }
    public function designer(){

         return $this->belongsTo(User::class,'designer_id','id');

    }
}
