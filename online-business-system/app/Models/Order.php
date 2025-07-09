<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'package_id',
        'status',
        'notes',
        'total_price',
        'discount_applied',
        'ordered_at',
    ];
    protected $casts = [
        'total_price' => 'decimal:2',
        'ordered_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function project()
    {
        return $this->hasOne(Project::class);
    }
    public function template()
    {
        return $this->belongsTo(Template::class);
    }    

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function invoice()
    {
        return $this->hasOne(Invoice::class);
    }
}