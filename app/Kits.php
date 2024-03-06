<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kits extends Model
{
    public function cursos() {
        return $this->belongsToMany(Cursos::class);
    }
}
