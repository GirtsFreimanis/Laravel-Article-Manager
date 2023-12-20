<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ArticleController extends Controller
{
    public function index(): View
    {
        $articles = Article::orderBy('id', 'desc')->get();
        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    public function create(): View
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request): RedirectResponse
    {
        $request['picture'] = $request['picture'] ?? 'https://seeklogo.com/images/G/globe-logo-42DE548AC7-seeklogo.com.png';
        //php artisan make request

        $article = (new Article)->fill([
            'title' => $request->get('title'),
            'short_description' => $request->get('short_description'),
            'description' => $request->get('description'),
            'picture' => $request->get('picture'),
        ]);

        $article->save();

        return redirect()->route('articles.index')->with('success', 'Successfully created article');
    }

    public function show(Article $article): View
    {
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function edit(Article $article): View
    {
        return view('articles.edit', [
            'article' => $article
        ]);
    }

    public function update(ArticleRequest $request, Article $article): RedirectResponse
    {
        $request['picture'] = $request['picture'] ?? 'https://seeklogo.com/images/G/globe-logo-42DE548AC7-seeklogo.com.png';
        //php artisan make request
        $article->update([
            'title' => $request->get('title'),
            'short_description' => $request->get('short_description'),
            'description' => $request->get('description'),
            'picture' => $request->get('picture'),
        ]);

        return redirect()->route('articles.index')->with('success', 'Successfully updated article');
    }

    public function destroy(Article $article): RedirectResponse
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Successfully deleted article');
    }
}
