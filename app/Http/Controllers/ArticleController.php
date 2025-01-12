<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view('pages.articles.articles')->with('articles', $articles);
    }

    public function show(Article $article)
    {
        //
    }

    public function create_articles()
    {
        //
    }

    public function store(Request $request)
    {

        // Faylni faqat PDF bo'lishini tekshirish
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'file_path' => 'required|mimes:pdf|max:10240', // Faylni faqat PDF va maksimal hajmi 10MB
        ]);
    
        // Faylni yuklash
        if ($request->hasFile('file_path')) {
            // Faylni saqlash
            $filePath = $request->file('file_path')->store('pdfs', 'public'); // Faylni public/pdfs papkasiga saqlaymiz
        }
    
        // Maqolani yaratish va saqlash
        $article = Article::create([
            'title' => $request->title,
            'file_path' => $filePath, // Fayl yo‘lini saqlash
            'category' => $request->category,
            'status' => 'yangi', // Statusni 'yangi' deb belgilash
        ]);
    
        return redirect()->route('articles.index')->with('success', 'Maqola yaratildi!');
    }
    

    public function delete() {}
}
