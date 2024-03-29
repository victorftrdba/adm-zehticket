<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'amount',
        'value',
        'event_id',
        'factor'
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
