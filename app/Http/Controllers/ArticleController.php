<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function index()
    {
        return Article::all();
    }

    public function show(Article $article)
    {
        return $article;
    }

    public function store(Request $request)
    {
        $article = Article::create($request->all());

        return response()->json($article, 201);
        //201: Object created. Useful for the store actions.
    }

    public function update(Request $request, Article $article)
    {
        $article->update($request->all());

        return response()->json($article, 200);
        //200: OK. The standard success code and default option.
    }

    public function delete(Article $article)
    {
        $article->delete();

        return response()->json(null, 204);
        //204: No content. When an action was executed successfully, but there is no content to return
    }
}