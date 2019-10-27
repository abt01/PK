<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Product extends Model
{
    //
    protected $fillable = ['name','description','availability','price','picture','category','size','quantity'];

    public function getPicture(){
        return Config::get('constants.IMAGE_URL').$this->picture.'.jpg';
    }
}
