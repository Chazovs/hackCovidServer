<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class RegKey
 * @package App\Models
 * @version May 22, 2020, 8:52 pm UTC
 *
 * @property string $key
 */
class RegKey extends Model
{
    use SoftDeletes;

    public $table = 'reg_keys';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'key'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'key' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
