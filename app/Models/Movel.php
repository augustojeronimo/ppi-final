<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movel extends Model
{
    use HasFactory;

    protected $table = "moveis";

    protected $fillable = [
        'nome',
        'localizacao',
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
}
