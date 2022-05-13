<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OptionCar extends Model
{
    protected $fillable = [
        'option_name',
        'price',
        'serial_no',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'option_cars';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Get the post that owns the comment.
     */
    public function car()
    {
        return $this->belongsTo('App\Models\Cars');
    }
}
