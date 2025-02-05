<?php

namespace App\Shared\Infra\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    protected $fillable = [
        'name',
        'customer_id',
        'number',
        'amount',
        'pix_key',
        'status'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}
