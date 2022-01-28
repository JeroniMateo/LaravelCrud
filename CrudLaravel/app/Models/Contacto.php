<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $fillable =['nombre','apellido','telefono','relationship'];

    public function getRouteKeyName()
    {
        return 'nombre';
    }
}
