<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
    use HasFactory;
    protected $table = 'quotes';
    protected $primaryKey = 'id_quotes';
    protected $fillable = [
        'id_quotes',
        'title_quotes',
        'quotes',
        'text_by',
        'foto'
    ];
}
