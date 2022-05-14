<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'sales_person_id',
        'model',
        'serial_no',
        'sale_price',
        'date',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'sales';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


    /**
     * Get the post that owns the comment
     */
    public function car()
    {
        return $this->belongsTo('App\Models\Cars', 'serial_no', 'serial_no');
    }

    /**
     * Get the post that owns the comment
     */
    public function person()
    {
        return $this->belongsTo('App\Models\SalesPersons', 'sales_person_id', 'id');
    }
}
