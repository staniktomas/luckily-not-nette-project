<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin Builder
 */
class Invoice extends Model
{
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';

    protected $fillable = [
        'customer_id',
        'discount',
        'total'
    ];
    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function invoiceItems(){
        return $this->hasMany(InvoiceItem::class);
    }
}
