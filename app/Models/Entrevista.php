<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrevista extends Model
{
    use HasFactory;
    
    public $table = "entrevistas";
    public $guarded=[];

    public function acomp() {
        return $this->hasMany(Acomp::class);
    }

    public function prospecto() {
        return $this->hasOne(Prospecto::class,'id_prospecto','id_asociado');
    }

    public function user() {
        return $this->hasOne(User::class,'id','id_user');
    }
}
