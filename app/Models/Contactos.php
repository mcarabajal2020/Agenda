<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contactos extends Model
{
    use HasFactory;
    protected $table = 'contactos';
    protected $primaryKey = 'id_contacto';

    public function categorias():BelongsTo{
        return $this->belongsTo(Categoria::class, 'categoria_id','id_categoria');
    }
}
