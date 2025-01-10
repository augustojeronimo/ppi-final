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
        return $this->belongsToMany(Equipamento::class, 'experimento_equipamento', 'experimento_id', 'equipamento_id');
    }

    public function materiais() {
        return $this->belongsToMany(Material::class, 'experimento_material', 'experimento_id', 'material_id');
    }

    public function reagentes() {
        return $this->belongsToMany(Reagente::class, 'experimento_reagente', 'experimento_id', 'reagente_id');
    }

    public function residuos() {
        return $this->belongsToMany(Residuo::class, 'experimento_residuo', 'experimento_id', 'residuo_id');
    }

}
