<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jumlah extends Model
{
    use HasFactory;
    protected $table = 'jumlah';
    protected $primaryKey = 'id_jumlah';
    protected $fillable = [
        'id_jumlah',
        'title',
        'description',
        'foto'
    ];
}
