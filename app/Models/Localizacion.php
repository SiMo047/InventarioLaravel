<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Localizacion extends Model
{
    use HasFactory;


    protected $fillable =[
        'ciudad',
        'nombre_edificio',
        'direccion',
        'numero_sala'
    ];


    public function productos(): HasMany //Una localizacion puede tener muchos productos 
    {
        return $this->hasMany(Producto::class);
    }
}
