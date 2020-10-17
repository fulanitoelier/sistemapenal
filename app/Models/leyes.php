<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class leyes extends Model
{
    use HasFactory;
    public function tipos(){
        return $this->beLongsTo(tipos::class,'tipo_id');    
    }
    public function consulta(){
        return $this->hasMany(tipos::class,'id');    
    }
}
