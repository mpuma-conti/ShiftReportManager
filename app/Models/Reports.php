<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Reports extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'turno',
        'jefe_turno',
        'codigo_equipo',
        'descripcion',
        'tiempo',
        'importancia',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}