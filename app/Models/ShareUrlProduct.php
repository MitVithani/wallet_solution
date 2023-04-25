<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ShareUrlProduct extends Authenticatable
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'share_link_id',
        'product_id',
        'price',
        'describe_item',
        'discount_type',
        'discount',
        'discount_price',
        'quantity',
    ];
    
    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
