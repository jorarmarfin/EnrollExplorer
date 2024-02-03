<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Lawyer extends Model
{
    use HasFactory;

    // Protege el ID para que no sea asignable masivamente, junto con cualquier otro campo que desees proteger
    protected $guarded = ['id'];

    // Atributo personalizado para obtener el nombre completo del abogado
    public function getFullNameAttribute()
    {
        // Concatena los campos para formar el nombre completo
        return $this->paterno . ' ' . $this->materno . ' ' . $this->nombres;
    }

    // Accesor para el apellido paterno: convierte el valor a mayúsculas antes de guardarlo en la base de datos
    protected function Paterno(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => mb_strtoupper($value),
        );
    }

    // Accesor para el apellido materno: convierte el valor a mayúsculas antes de guardarlo
    protected function Materno(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => mb_strtoupper($value),
        );
    }

    // Accesor para el nombre: convierte el valor a mayúsculas antes de guardarlo
    protected function Nombres(): Attribute
    {
        return Attribute::make(
            set: fn (string $value) => mb_strtoupper($value),
        );
    }

    // Relación uno a muchos inversa (muchos abogados pueden pertenecer a un usuario)
    public function user(): BelongsTo
    {
        // Define la relación con el modelo User, especificando la clave foránea 'user_id'
        return $this->belongsTo(User::class, 'user_id');
    }
}
