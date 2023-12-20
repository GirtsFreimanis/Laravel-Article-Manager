<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SearchController extends Controller
{
    public function search(Request $request): View
    {
        $search = $request->query('search');
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');

        $query = Article::query();

        if ($search) {
            $query->where('title', 'LIKE', "%{$search}%");
        }

        if ($fromDate) {
            $query->whereDate('created_at', '>=', $fromDate);
        }

        if ($toDate) {
            $query->whereDate('created_at', '<=', $toDate);
        }

        $articles = $query->orderBy('id', 'desc')->get();

        return view('articles.index', [
            'articles' => $articles
        ]);
    }
}
