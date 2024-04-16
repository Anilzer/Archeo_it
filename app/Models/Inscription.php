<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;
    public function stage()
    {
        return $this->belongsTo(Stage::class, 'idStage');
    }

    protected $fillable = [
        'nom',
        'prenom',
        'datenais',
        'idStage',
    ];
}
