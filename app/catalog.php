<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catalog extends Model
{
    protected $table = 'catalog';
    protected $primaryKey='idCatalog';
    protected $fillable=['idParentCatalog','nameCatalog'];
    public $timestamps = false;
}
