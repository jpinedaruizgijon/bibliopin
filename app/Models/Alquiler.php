<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alquiler extends Model
{
    use HasFactory;
    protected $table = 'alquileres';
    protected $guarded = [];

    // Convierto las fechas para poder trabajar con ellas como objetos Carbon
    protected $casts = [
        'fecha_inicio' => 'date',
        'fecha_fin'    => 'date',
    ];

    // Cada alquiler pertenece a un libro
    public function libro()
    {
        return $this->belongsTo(Libro::class);
    }
}
