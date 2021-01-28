<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospecto extends Model
{
    use HasFactory;

    public $table = "prospecto";
    public $guarded=[];

    public function entrevistas() {
        return $this->hasMany(Entrevista::class, "id_asociado","id_prospecto");
    }
}
