<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'data',
    ];

    public $timestamps = false;

    public function equipamentos() {
        return $this->hasMany(Equipamento::class)->get();
    }

    public function materiais() {
        return $this->hasMany(Material::class)->get();
    }

    public function reagentes() {
        return $this->hasMany(Reagente::class)->get();
    }

    public function residuos() {
        return $this->hasMany(Residuo::class)->get();
    }
}
