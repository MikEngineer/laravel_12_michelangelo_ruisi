<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Tag;
use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ArticleEditRequest;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view("article.index", compact("articles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tags = Tag::all();

        return view("article.create", compact("tags"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $article = Article::create([
            "title" => $request->title,
            "subtitle" => $request->subtitle,
            "body" => $request->body,
            // "img" => $request->file('img')->store("img", "public")
        ]);

        $article->tags()->attach($request->tags);

        if ($request->file("img")) {
            $article->img = $request->file("img")->store("img", "public");
            $article->save();
        }
        return redirect()->back()->with('message', 'Articolo inserito correttamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        $tags = Tag::all();

        return view('article.edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleEditRequest $request, Article $article)
    {
        $article->update([
            $article->title = $request->title,
            $article->subtitle = $request->subtitle,
            $article->body = $request->body,
        ]);

        $article->tags()->sync($request->tags);

        Storage::delete($article->img); // non funziona
        
        if ($request->img) {
            $request->validate(['img' => 'image']);
            $article->update([
                $article->img = $request->file('img')->store('img', 'public')
            ]);
        }
        return redirect(route('article.index'))->with('storeSuccess', 'Articolo modificato!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        $article->tags->detach();
        return redirect(route('article.index'))->with('storeSuccess','Articolo eliminato!');
    }
}
