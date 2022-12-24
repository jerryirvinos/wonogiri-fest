<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'code',
        'quota',
        'title',
        'detail',
        'status',
        'is_release',
    ];
}
