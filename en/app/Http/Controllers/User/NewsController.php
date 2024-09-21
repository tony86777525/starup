<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->get('page');
        $q = $request->get('q');

        $query = new News();

        if (isset($q) && $q !== '') {
            $query = $query->where('title', 'like', "%$q%");
        }

        $news = $query
            ->where('enabled', '=', 1)
            ->orderBy('art_date', 'DESC')
            ->orderBy('created_at', 'ASC')
            ->paginate(5);

        return view('user.news', compact('news', 'q', 'page'));
    }

    public function detail($news_id)
    {
        $news = News::where('id', $news_id)
            ->where('enabled', 1)
            ->first();

        if (empty($news)) {
            abort(404);
        }

        return view('user.news-content', compact('news'));
    }
}
