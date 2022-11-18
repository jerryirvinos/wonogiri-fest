<?php

namespace App\Models;
use Alfa6661\AutoNumber\AutoNumberTrait;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory, AutoNumberTrait;

    protected $fillable = [
        'ticket_code',
        'identity_number',
        'name',
        'address',
        'phone',
        'purchase_date',
        'qty',
        'total_price',
        'account_number',
        'payment_status',
        'bank',
        'ticket_type',
        'branch',
    ];

    public function getAutoNumberOptions()
    {
        return [
            'ticket_code' => [
                'format' => function () {
                    return 'SO/' . date('Y.m.d') . '/' . $this->bank . '/?'; 
                },
                'length' => 5,
            ]
        ];
    }
}
