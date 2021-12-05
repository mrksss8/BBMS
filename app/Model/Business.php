<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Resident;
class Business extends Model
{
    protected $table = 'business';
    protected $guarded = ['']; 

    public function residence()
    {
       return $this->belongsTo('App\Model\Resident','business_owner_id');
    }
}
