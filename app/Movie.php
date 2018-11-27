<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{

    //no es obligatorio, si seguimos las convenciones
    protected $table = 'movies';

    //campos protegidos
    protected $guarded = [];

    //campos completables
    protected $fillable = ['title','genre_id','length'];

    protected $dates = ['created_at','updated_at','release_date'];

    public function nombreParaListar(){
      return $this->title . " (" . $this->release_date . ")";
    }

}
