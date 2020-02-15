<?php

namespace App\userModel;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'product';
    protected $fillable = ['ID','name','price','avatar','amountProduct','color','size','categoryID','producerID','producttype'];

}
