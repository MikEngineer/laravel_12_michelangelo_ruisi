<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function create()
    {
        return view("tag.create");
    }

    public function store(Request $request)
    {
        $tags = Tag::create(["name" => $request->name]);

        return redirect()->route("article.create")->with("success","Tag inserito correttamente.");
    }
}