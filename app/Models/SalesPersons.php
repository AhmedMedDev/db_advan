<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class SalesPersons extends Model
{
    protected $fillable = [
        'name',
        'phone',
    ];

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'sales_persons';

    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'string';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
