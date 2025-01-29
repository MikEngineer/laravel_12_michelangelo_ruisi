<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\ProductModel;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    function homepage()
    {
        return view('welcome');
    }
    
    function products()
    {
        $products = ProductModel::all();
        return view('products', ['products' => $products]);
    }
    
    function storage(Request $request)
    {
        
        try {
            ProductModel::create([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
            ]);
            return redirect()->back()->with('storeSuccess', 'Prodotto inserito correttamente!');
        } catch (Exception $e) {
            return redirect()->back()->with('storeError', 'Prodotto non inserito. Riprova.');
        }
    }
}
