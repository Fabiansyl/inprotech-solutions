<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'amount',
        'payment_method',
        'status',
        'paid_at',
    ];
    protected $casts = [
        'amount' => 'decimal:2',
        'payment_date' => 'datetime',
        'payment_method' => 'string',
    ];
    /**
     * Get the order that owns the payment.
     */
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function package()
    {
        return $this->belongsTo(Package::class);
    }   
    public function project()
    {
        return $this->belongsTo(Project::class);
    }   
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }
}

