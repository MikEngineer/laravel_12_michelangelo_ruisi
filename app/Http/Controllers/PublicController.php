<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ProductRequest;

class PublicController extends Controller
{
    function homepage()
    {
        return view('welcome');
    }
}
