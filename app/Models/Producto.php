<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Localizacion;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    use HasFactory;


    protected $fillable = [
        'nombre',
        'fabricante',
        'descripcion',
        'stock',
        'estado',
        'localizacion_id'
    ];
    
    public function localizacion(): BelongsTo //Un producto pertenece a una localizacion 
    {
        return $this->belongsTo(Localizacion::class);
    }

}
