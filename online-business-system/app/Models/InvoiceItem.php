<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id',
        'description',
        'quantity',
        'unit_price',
        'total',
    ];
    protected $casts = [
        'quantity' => 'integer',
        'unit_price' => 'decimal:2',
    ];
    /**
     * Get the invoice that owns the invoice item.
     */
        
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}