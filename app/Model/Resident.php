<?php

namespace App\Model;

use App\Model\Business;
use App\Model\Blotter;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Resident extends Model
{
    protected $table = 'residents';
    protected $guarded = ['']; 

    public function business()
    {
       return $this->hasMany('App\Model\Business', 'business_owner_id');
    }

    public function blotters()
    {
       return $this->belongsToMany('App\Model\Blotter');
    }

}
