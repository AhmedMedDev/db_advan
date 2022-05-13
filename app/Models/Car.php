<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'serial_no',
        'model',
        'manufacturer',
        'price',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'cars';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'serial_no';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
