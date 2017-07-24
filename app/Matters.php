<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cases;

class Matters extends Model
{
    protected $table="matters";

    protected $fallible=['user_id','advocate_id','matter_reference','matter_type','matter_def','matter_stage','matter_op_date','matter_cl_date'];

    public function getOne(){
            return $this->hasOne(Cases::class,'static_case_id','matter_type');
    }

}
