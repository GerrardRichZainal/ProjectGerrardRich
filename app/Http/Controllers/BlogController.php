<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Tampilkan halaman blog dengan data dari database + konten lama.
     */
    public function index(Request $request)
    {
        // Deteksi bahasa dari URL (?lang=id)
        $lang = $request->get('lang') === 'id' ? 'id' : 'en';

        // Ambil semua data blog dari database
        $blogs = Blog::latest()->get();

        // Kirim ke view blog.blade.php
        return view('blog', compact('blogs', 'lang'));
    }
}
