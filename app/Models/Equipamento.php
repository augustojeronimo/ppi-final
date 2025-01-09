<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'imagem',
        'movel_id',
    ];

    public $timestamps = false;

    public function movel() {
        return $this->belongsTo(Movel::class)->get()->first();
    }

    public function experimentos() {
        return $this->belongsToMany(Experimento::class)->get();
    }
}
