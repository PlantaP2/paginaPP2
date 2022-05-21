<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index', ['articles' => Article::latest()->paginate(3)]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        //dd($request);
        $validated = $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
            'date' => 'required',
            'link' => 'required',
            'abstract' => 'required|max:3000'
        ]);

        Article::create([
            'title' => $validated['title'],
            'author' => $validated['author'],
            'date' => $validated['date'],
            'link' => $validated['link'],
            'abstract' => $validated['abstract']
        ]);

        return back()->with('success', 'Creado con exito');
    }
}
