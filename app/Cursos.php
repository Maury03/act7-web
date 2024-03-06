<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    public function grupos() {
        return $this->hasOne(Grupos::class);
    }

    public function kits() {
        return $this->hasOne(Kits::class);
    }
}
