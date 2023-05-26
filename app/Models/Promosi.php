<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promosi extends Model
{
    use HasFactory;
    protected $table = 'promosi';
    protected $primaryKey = 'id_promosi';
    protected $fillable = [
        'id_promosi',
        'title',
        'subtitle',
        'description',
        'foto'
    ];
}
