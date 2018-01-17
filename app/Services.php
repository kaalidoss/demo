<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Services extends Model
{
    protected $table='service';
    protected $fillable=['model_name','service_center','customer_name'];
}

