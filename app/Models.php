<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Models extends Model
{
    use Searchable;
    protected $table='models';
    protected $fillable=['company_id','model_name','price'];
}
