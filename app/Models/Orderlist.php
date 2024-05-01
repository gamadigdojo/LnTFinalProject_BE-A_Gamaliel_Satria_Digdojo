<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderlist extends Model
{
    use HasFactory;

    public $fillable=[
        'user',
        'invoice',
        'total_price',
        'alamat',
        'kodepos',
        'order_lists'
     ];
    
     protected $casts = [
        'order_lists' => 'array'
    ];
 
}
