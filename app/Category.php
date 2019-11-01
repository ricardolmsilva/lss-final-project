<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\Tutorial;

class Category extends Model
{
    protected $fillable = [
        'designacao', 'idTutorial'
    ];


    public function Tutorial()
    {
        return $this->belongsToMany('App\Tutorial', 'categories_tutorials',  'idCategoria', 'idTutorial')->withPivot( 'idTutorial');
    }
}
