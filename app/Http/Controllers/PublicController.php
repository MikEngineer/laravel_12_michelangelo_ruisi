<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;

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

    function storage(ProductRequest $request)
    {
        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $img = null;

        if ($request->file('img')) {
            $img = $request->file('img')->store("img", "public");
        }

        try {
            ProductModel::create([
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'img' => $img,
                // 'name' => $request->name,
                // 'description' => $request->description,
                // 'price' => $request->price,
                // 'img' => $request->file('img')->store("img", "public"),
            ]);
            return redirect()->back()->with('storeSuccess', 'Prodotto inserito correttamente!');
        } catch (Exception $e) {
            return redirect()->back()->with('storeError', 'Prodotto non inserito. Riprova.');
        }
    }

    
}
