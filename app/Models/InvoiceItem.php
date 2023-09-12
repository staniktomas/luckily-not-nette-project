<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'invoice_id',
        'product_id',
        'quantity'
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}
