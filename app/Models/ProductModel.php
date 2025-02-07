<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    protected $table = 'products'; //errore mio nel creare il model, ho risolto cercando una soluzione online
    protected $fillable = [
        'name',
        'description',
        'price',
        'img',
        'user_id',
    ];

    /**
     * Get the user that owns the product.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
