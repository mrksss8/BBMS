<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\Residence;
class Blotter extends Model
{

    protected $table = 'blotters';
    protected $guarded = ['']; 

    public function residence()
    {
      return $this->belongsTo('App\Model\Residence','person_to_complain_id');
    }

}
