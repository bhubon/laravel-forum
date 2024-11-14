<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {

        $categpries = Category::all();
        $threads = Thread::latest()->with(['category', 'user', 'replies.user'])->withCount(['replies'])->paginate(10);

        // dd($threads);

        return view('pages.home', [
            'categories' => $categpries,
            'threads' => $threads,
        ]);
    }

    public function forum(string $thread) {
        $thread = Thread::with(['category', 'user', 'replies'=>function($query){
            $query->whereNull('reply_id')->with(['user','children.user']);
        }])->withCount('replies')->findOrFail($thread);

        return view('pages.singe-forum', [
            'thread' => $thread
        ]);
    }
}
