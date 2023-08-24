<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    public function proyecto() {
        return $this->belongsTo(proyecto::class);
    }
    public function Usuario() {
        return $this->belongsTo(Usuario::class);
    }
}
