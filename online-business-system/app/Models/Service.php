<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'type',
    ];
    protected $casts = [
        'price' => 'decimal:2',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }

    public function packages()
    {
        return $this->hasMany(Package::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}

   
