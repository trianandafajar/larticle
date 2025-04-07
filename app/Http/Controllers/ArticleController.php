<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Resources\Article as ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        return ArticleResource::collection($articles);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->input('title');
        $article->body = $request->input('body');

        if ($article->save()) {
            return new ArticleResource($article);
        }

        return response()->json(['message' => 'Failed to save article'], 500);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return new ArticleResource($article);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->title = $request->input('title');
        $article->body = $request->input('body');

        if ($article->save()) {
            return new ArticleResource($article);
        }

        return response()->json(['message' => 'Failed to update article'], 500);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        if ($article->delete()) {
            return new ArticleResource($article);
        }

        return response()->json(['message' => 'Failed to delete article'], 500);
    }
}
