<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    protected $fillable = [
        'nombre',
        'descripcion',
        'fecha_entrega',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
