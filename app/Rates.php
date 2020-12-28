<?php

namespace Rates;

use Illuminate\Database\Eloquent\Model;
use App\User_to_rates;

class Rates extends Model
{
    protected $table = 'rates';
    protected $fillable = [];
    public function users(){
        return $this->belongsTo('App\User', 'id_student', 'id');
    }
}
