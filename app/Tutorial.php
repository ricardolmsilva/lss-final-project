<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Tutorial extends Model
{
    protected $fillable = [
        'titulo', 'descricao', 'imagemDeCapa', 'receita'
    ];



    public function Categories()
    {
        return $this->belongsToMany('App\Category', 'categories_tutorials', 'idCategoria', 'idTutorial')->withPivot('idCategoria');
    }
}
