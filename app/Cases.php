<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    protected $table="static_case";

    protected $fallible = [
        'static_case_id', 'name_case', 'case_data',
    ];



}
