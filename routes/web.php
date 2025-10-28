<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blog;
use App\Models\Project;
use App\Models\Experience;

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

// 🔹 PROJECT
Route::get('/project', function () {
    $lang = request()->get('lang') === 'id' ? 'id' : 'en';
    $projects = Project::latest()->get();
    return view('project', compact('projects', 'lang'));
});

// 🔹 EXPERIENCE
Route::get('/experience', function () {
    $lang = request()->get('lang') === 'id' ? 'id' : 'en';
    $experiences = Experience::latest()->get();
    return view('experience', compact('experiences', 'lang'));
});
