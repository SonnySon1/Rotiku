<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Help extends Model
{
    use HasFactory;
    protected $table = 'help';
    protected $primaryKey = 'id_help';
    protected $fillable = [
        'id_help',
        'subtitle',
        'title',
        'description'
    ];
}
