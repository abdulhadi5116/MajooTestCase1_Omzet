<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'merchant_id',
        'outlet_id',
        'bill_total',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
