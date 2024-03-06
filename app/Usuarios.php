<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public function grupos() {
        return $this->hasOne(Grupos::class);
    }
}
