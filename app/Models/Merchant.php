<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'merchant_name',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}
