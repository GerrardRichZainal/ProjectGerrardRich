<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Experience;
use App\Models\Category;
use App\Models\Job;

// 🔹 PORTFOLIO
Route::get('/portfolio', function () {
    $portfolios = \App\Models\Portfolio::with(['category', 'job'])->latest()->get();
    return view('portfolio', ['portfolios' => $portfolios]);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// 🔹 BLOG
Route::get('/blog', function () {
    $lang = request()->get('lang') === 'id' ? 'id' : 'en';
    $blogs = Blog::latest()->get();
    return view('blog', compact('blogs', 'lang'));
});

// 🔹 PROJECT (termasuk relasi ke Category)
Route::get('/project', function () {
    $lang = request()->get('lang') === 'id' ? 'id' : 'en';
    $projects = Project::with('category')->latest()->get();
    return view('project', compact('projects', 'lang'));
});

// 🔹 EXPERIENCE
Route::get('/experience', function () {
    $lang = request()->get('lang') === 'id' ? 'id' : 'en';
    $experiences = Experience::latest()->get();
    return view('experience', compact('experiences', 'lang'));
});

// 🔹 CATEGORY (cek relasi category -> projects)
Route::get('/category', function () {
    $lang = request()->get('lang') === 'id' ? 'id' : 'en';
    $slug = request()->get('slug');

    if ($slug) {
        $category = Category::with('projects')->where('slug', $slug)->firstOrFail();
        return view('category', compact('category', 'lang'));
    }

    $categories = Category::with('projects')->get();
    return view('category', compact('categories', 'lang'));
});

// 🔹 JOBS
Route::get('/jobs', function () {
    $lang = request()->get('lang') === 'id' ? 'id' : 'en';
    $jobs = Job::latest()->get();
    return view('jobs', compact('jobs', 'lang'));
});