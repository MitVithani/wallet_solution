<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class employee_master
 * @package App\Models
 * @version May 19, 2022, 7:50 am UTC
 *
 * @property $table->integer('field_name' $emp_id
 */
class Customer extends Model
{
    use HasFactory;

    public $table = 'customers';

    public $fillable = [
        'name',
        'email',
        'phone_number',
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];


}
