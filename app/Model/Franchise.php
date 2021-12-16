<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{

    public function resident()
    {
       return $this->belongsTo('App\Model\Resident','franchisee_id');
    }
    
}
