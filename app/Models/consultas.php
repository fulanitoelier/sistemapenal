<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consultas extends Model
{
    use HasFactory;
    public function leyes(){
        return $this->beLongsTo(leyes::class,'ley_id');    
    }
}
