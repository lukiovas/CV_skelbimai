<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advert extends Model
{
     //Table Name
     protected $table = 'adverts';
     //Primary Key
     public $primaryKey = 'id';
     //Timestamps
     public $timestamps = true;
}
