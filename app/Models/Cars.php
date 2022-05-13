<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
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


    /**
     * Get the comments for the blog post.
     */
    public function options()
    {
        return $this->hasMany('App\Models\OptionCar', 'serial_no', 'serial_no');
    }
}
