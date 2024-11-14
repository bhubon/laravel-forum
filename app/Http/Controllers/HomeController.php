<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller {
    public function index() {

        $categpries = Category::all();
        $threads = Thread::latest()->with(['category','user','replies','replies.user'])->withCount(['replies'])->paginate(10);

        // dd($threads);

        return view('pages.home', [
            'categories' => $categpries,
            'threads' => $threads,
        ]);
    }

    public function forum() {
        return view('pages.singe-forum');
    }
}
