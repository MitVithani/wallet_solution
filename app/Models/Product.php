<?php

namespace App\Models;

use App\Models\Product_Image;
use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Employee
 * @package App\Models
 * @version May 20, 2022, 4:35 am UTC
 *
 */
class Product extends Model
{

    use HasFactory;

    public $table = 'products';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'price',
        'additional_details',
        'describe_item',
        'quantity',
        'is_delivery',
        'is_visible',
        'user_id',
        'discount_type',
        'discount_price',
        'discount',
        'is_delete',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public function productImage()
    {
        return $this->hasMany(Product_Image::class, 'p_id', 'id');
    }

}
