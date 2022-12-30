<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Line_up extends Model
{
    use HasFactory;
    protected $table = 'lineups';

    protected $fillable = [
        'title',
        'thumbnail',
        'status',
        'is_release',
    ];
}
