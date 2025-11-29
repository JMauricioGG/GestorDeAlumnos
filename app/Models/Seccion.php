<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seccion extends Model
{
    /** @use HasFactory<\Database\Factories\SeccionFactory> */
    use HasFactory;


    protected $fillable = ['seccion','aula'];

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class)->withTimestamps();
    }
}
