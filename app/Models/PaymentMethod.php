<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    public function tax()
    {
      return $this->belongsTo(\App\Models\Tax::class, 'tax_id');
    } 
}