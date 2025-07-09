<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PromoCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'discount_type',
        'discount_value',
        'expires_at',
        'usage_limit',
    ];
    protected $casts = [
        'discount_type' => 'string',
        'discount_value' => 'decimal:2',
        'is_active' => 'boolean',
        'expires_at' => 'datetime',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function package()
    {
        return $this->belongsTo(Package::class);
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function template()
    {
        return $this->belongsTo(Template::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
    
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
    /**
     * Check if the promo code is valid based on expiration and usage limit.
     *
     * @return bool
     */
    public function isActive()
    {
        return $this->is_active && $this->expires_at > now() && $this->usage_limit > 0;
    }       
/**
     * Check if the promo code is valid for use.
     *
     * @return bool
     */
    public function isUsable()
    {
        return $this->is_active && $this->expires_at > now() && $this->usage_limit > 0;
    }           

    /**
     * Check if the promo code is valid.
     *
     * @return bool
     */
    public function isActiveAndUsable()
    {
        return $this->is_active && $this->expires_at > now() && $this->usage_limit > 0;
    }   

    public function isValid()
    {
        return $this->expires_at > now() && $this->usage_limit > 0;
    }
}
