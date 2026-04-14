<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $guarded = [];

    // Para que disponible llegue como true/false y no como 1/0
    protected $casts = [
        'disponible' => 'boolean',
    ];

    // Un libro puede tener muchos alquileres
    public function alquileres()
    {
        return $this->hasMany(Alquiler::class);
    }
}
