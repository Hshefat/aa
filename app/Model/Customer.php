<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    protected $table = 'customers';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'age',
        'blood_group',
        'phone_number',
        'email',
        'village',
        'district',
        'post_code',
        'city',
        'country',
        'job_title'
    ];
    public $timestamp = false;
}