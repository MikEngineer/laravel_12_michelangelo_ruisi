<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products'; //errore mio nel creare il model, ho risolto cercando una soluzione online
    protected $fillable = [
        'name',
        'description',
        'price'
    ];
}
