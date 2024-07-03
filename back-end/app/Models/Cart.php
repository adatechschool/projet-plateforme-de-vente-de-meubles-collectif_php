<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];
// Définir la relation avec CartItem
public function items()
{
    return $this->hasMany(CartItem::class);
}

// Définir la relation avec User
public function user()
{
    return $this->belongsTo(User::class);
}
}
