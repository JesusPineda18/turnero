<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

   

    public function professionals()
    {
        return $this->belongsTo(Professional::class, "professional_id");
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class, "customer_id");
    }
}
