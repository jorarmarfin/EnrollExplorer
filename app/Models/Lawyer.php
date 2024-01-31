<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    use HasFactory;
    protected $fillable = [
        'codigo',
        'dni',
        'paterno',
        'materno',
        'nombres',
        'email',
        'telefono',
        'direccion',
        'estado',
    ];
    public function getFullNameAttribute()
    {
        return $this->paterno . ' ' . $this->materno . ' ' . $this->nombres;
    }
}
