<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etape extends Model
{
    use HasFactory;

    protected $table = "etape";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'number',
        'departure',
        'arrival',
        'departure_date',
        'arrival_date',
        'voyage_id',
        'seat',
        'gate',
        'baggage_drop',
    ];
}
