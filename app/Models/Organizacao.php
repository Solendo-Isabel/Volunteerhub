<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Organizacao extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'vc_nome',
        'descricao',
        'unid_comando',
        'imagem'
    ];

    protected $table = 'organizacoes';
}
