<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reagente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'validade',
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
