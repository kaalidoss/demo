<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Company extends Model
{
    use Searchable;
    protected $table='companies';
    protected $fillable=['company_name'];

    public function getCompanyModels()
    {
      return $this->hasMany('App\Models');
    }
}
