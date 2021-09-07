<?php

namespace App\Model;

use App\Model\Business;
use App\Model\Blotter;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Residence extends Model
{
    protected $table = 'residence';
    protected $guarded = ['']; 

    public function business()
    {
       return $this->hasMany('App\Model\Business', 'business_owner_id');
    }

    public function blotter()
    {
       return $this->hasMany('App\Model\Blotter', 'person_to_complain_id');
    }

}
