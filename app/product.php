<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function presentPrice(){

        // return money_format('$%i', $this->price / 100);
        return number_format( $this->price,2);
    }

   
}
