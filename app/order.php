<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $table = 'order';
    protected $primaryKey='id';
    protected $fillable=['id_user','fullname','address','phone','email','day_order'];
    public $timestamps = false;
}
