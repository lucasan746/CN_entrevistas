<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acomp extends Model
{
    use HasFactory;

    public $table = "acomp";
    public $guarded=[];

    public function entrevista() {
        return $this->belongsTo(Entrevista::class);
    }
}
