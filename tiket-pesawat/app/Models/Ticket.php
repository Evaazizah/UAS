<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    // Tentukan kolom yang boleh diisi massal
    protected $fillable = [
        'name',
        'email',
        'destination',
        'departure_date',
    ];
}
