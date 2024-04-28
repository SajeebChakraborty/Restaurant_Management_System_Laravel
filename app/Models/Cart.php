<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'price', 'quantity', 'subtotal'
    ];
    public function CartUser(){
        return $this->belongsTo('App\Models\User', 'user_id', 'id');

    }
}
