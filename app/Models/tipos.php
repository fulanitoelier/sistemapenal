<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos extends Model
{
    use HasFactory;
    public function titulos(){
        return $this->beLongsTo(titulos::class,'titulo_id');    
    }
    public function leyes(){
        return $this->hasMany(leyes::class,'id');    
    }
}
