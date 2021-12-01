<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function shifts(){
        return $this->hasMany(Shift::class, "id");
    }

    public function catered(){
        return $this->hasMany(Catered::class, "id");
    }
}
