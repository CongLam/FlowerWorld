<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'customer_id', 'customer_email', 'customer_phone', 'amount', 'payment_method', 'address', 'status',
    ];
}
