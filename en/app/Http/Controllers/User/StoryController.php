<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->get('page');
        $q = $request->get('q');

        $query = new Story();

        if (isset($q) && $q !== '') {
            $query = $query->where('title', 'like', "%$q%");
        }

        $stories = $query
            ->where('enabled', '=', 1)
            ->orderBy('art_date', 'DESC')
            ->orderBy('created_at', 'ASC')
            ->paginate(5);

        return view('user.story', compact('stories', 'q', 'page'));
    }


    public function detail($story_id)
    {
        $story = Story::where('id', $story_id)
            ->where('enabled', 1)
            ->first();

        if (empty($story)) {
            abort(404);
        }

        return view('user.story-content', compact('story'));
    }
}
