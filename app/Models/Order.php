<?php

namespace App\Models;
use Alfa6661\AutoNumber\AutoNumberTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory,AutoNumberTrait;

    protected $fillable = [
        'uuid',
        'ticket_code',
        'identity_number',
        'name',
        'address',
        'phone',
        'email',
        'qty',
        'total_pay',
        'ticket_box',
        'code_ticket',
        'account_number',
        'account_name',
        'payment_status',
        'bank',
        'ticket_type',
        'is_online'
    ];

    public function getAutoNumberOptions()
    {
        return [
            'ticket_code' => [
                'format' => function () {
                    return $this->code_ticket .'-'. $this->ticket_box . '?';
                },
                'length' => 5,
            ]
        ];
    }
}
