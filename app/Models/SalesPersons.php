<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class SalesPersons extends Model
{
    protected $primaryKey = 'uuid';

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'name',
        'phone'
    ];

    // protected static function boot()
    // {
    //     parent::boot();

    //     static::creating(function (Model $model) {
    //         $model->setAttribute($model->getKeyName(), Uuid::uuid4());
    //     });
    // }
}
