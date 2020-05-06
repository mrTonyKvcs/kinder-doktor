<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'last_name',
        'first_name',
        'birthday',
        'social_security_number',
        'email',
        'phone_number',
        'piece',
        'pay_method',
        'city',
        'address',
        'zip_code',
        'gdpr',
        'is_nurse',
        'total'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
}
