<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupos extends Model
{
    public function cursos() {
        return $this->belongsToMany(Cursos::class);
    }

    public function usuarios() {
        return $this->belongsToMany(Usuarios::class);
    }
}
