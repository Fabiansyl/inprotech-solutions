<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'user_id',
        'service_id',
        'title',
        'description',
        'status',
        'order_date',
    ];
    protected $casts = [
        'order_date' => 'datetime',
        'updated_at' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

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

    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}
