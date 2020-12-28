<?php

namespace User_to_rates;

use Illuminate\Database\Eloquent\Model;
use App\Rates;

class User_to_rates extends Model
{
    protected $table = 'users';
    protected $fillable = [];
    public function rates(){
      return $this->hesOne('App\Rates', 'id_student', 'id');
    }
}
