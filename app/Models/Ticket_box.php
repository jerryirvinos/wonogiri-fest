<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket_box extends Model
{
    use HasFactory;

    protected $table = 'ticket_boxs';

    protected $fillable = [
        'name',
        'status',
    ];
}
