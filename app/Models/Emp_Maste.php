<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Emp_Maste
 * @package App\Models
 * @version May 19, 2022, 8:00 am UTC
 *
 * @property $table->integer('emp_id' $emp_id
 */
class Emp_Maste extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'emp__mastes';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'emp_id'
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
