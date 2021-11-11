<?php

namespace App\Models\Mongodb;

use Jenssegers\Mongodb\Eloquent\Model;

class Contact extends Model
{
    protected $connection = 'mongodb';

    protected $collection = 'contacts';

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'zip_code',
        'address',
        'address_number',
        'neighborhood',
        'state',
        'city',
        'relational_db_id',
    ];
}
