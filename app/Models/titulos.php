<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class titulos extends Model
{
    use HasFactory;
    public function tipos(){
        return $this->hasMany(tipos::class,'id');    
    }
}
