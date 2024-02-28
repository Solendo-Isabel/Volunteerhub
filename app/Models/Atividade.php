<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atividade extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'titulo',
        'descricao',
        'estado',
        'desc_estado',
        'data_fim',
        'data_inicio',
        'it_id_org'
    ];

    protected $table = 'atividades';
}
