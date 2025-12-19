<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Flower extends Model

{
    protected $table = 'flowers';
    protected $fillable = ['flower_name', 'flower_remains', 'flower_price', 'picture_url'];    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'orders_flowers');
    }
}
