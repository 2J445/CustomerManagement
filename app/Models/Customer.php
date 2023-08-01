<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    const KRAMER_FLAG_ON = 1;
    use HasFactory;
    protected $guarded = [];
    protected $dispatchesEvents = [
        'created' => \App\Events\KramerInComming::class,
    ];

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
    
    public function isKramer(): bool
    {
        return $this->kramer_flag == Customer::KRAMER_FLAG_ON;
    }
    
    protected $fillable = ['id', 'name', 'shop_id', 'postal', 'address', 'email', 'birthdate', 'phone', 'kramer_flag'];
}
