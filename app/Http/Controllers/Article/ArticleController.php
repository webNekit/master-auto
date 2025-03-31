<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('article::index', [
            'title' => 'Статьи',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);
        $articles = Article::where('is_active', true)
            ->where('is_popular', true)
            ->where('id', '!=', $id)
            ->orderByDesc('created_at')->get();
        return view('article::show', [
            'title' => $article->title,
            'articles' => $articles,
            'article' => $article
        ]);
    }
}
