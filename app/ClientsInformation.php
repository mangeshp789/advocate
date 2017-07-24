<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsInformation extends Model
{
    protected $table = "clients_information";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fallible = [
        "advocate_id","fullname","gender","email", "phone", "fax", "maidenname", "locbirth", "dob", "address",
        "city", "country", "postcode", "nInumber", "clienttype", "clientlimit", "introducer", "introducer_def",
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
