<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'value',
        'image',
        'address',
        'user_id',
        'date',
        'expires',
        'amount',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
