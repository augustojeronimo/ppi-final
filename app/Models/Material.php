<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    protected $table = "materiais";

    protected $fillable = [
        'nome',
        'descricao',
        'imagem',
        'movel_id',
    ];

    public $timestamps = false;

    public function movel() {
        return $this->belongsTo(Movel::class)->get()->first();
    }

    public function experimentos() {
        return $this->belongsToMany(Experimento::class, 'experimento_material', 'material_id', 'experimento_id');
    }
}
