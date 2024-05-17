<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashRegister extends Model
{
    protected  $fillable = [
        'id',
        'name_product',
        'description',
        'stock',
        'total',
        'change',
        ];
}
