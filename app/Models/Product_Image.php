<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Employee
 * @package App\Models
 * @version May 20, 2022, 4:35 am UTC
 *
 */
class Product_Image extends Model
{

    use HasFactory;

    public $table = 'product_images';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'p_id',
        'image',
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


}
