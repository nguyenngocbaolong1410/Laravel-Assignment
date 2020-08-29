<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $primaryKey='idProduct';
    protected $fillable=['idCatalogProduct','nameProduct','imgProduct','priceProduct','noidungProduct','infoProduct','buyedProduct','date'];
    public $timestamps = false;
}
