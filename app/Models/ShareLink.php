<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ShareLink extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'rand_link',
        'cust_id',
        'delivary_charge',
        'is_cart_lock',
    ];

    public function shareUrlProduct()
    {
        return $this->hasMany(ShareUrlProduct::class, 'share_link_id', 'id');
    }
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
    public function customer()
    {
        return $this->hasOne(Customer::class, 'id', 'cust_id');
    }
}
