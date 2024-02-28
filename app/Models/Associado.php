<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Associado extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id_membro',
        'credencial'
    ];

    protected $table = 'associados';

    protected $primaryKey = 'id_membro';
}
