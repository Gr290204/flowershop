<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Order extends Model
{
    use HasFactory;
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);

    }
    public function flowers(): BelongsToMany
    {
        return $this->belongsToMany(Flower::class, 'orders_flowers')
            ->withPivot(['count']);
    }

}
