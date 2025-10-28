<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $lang = request()->get('lang') === 'id' ? 'id' : 'en';
        $experiences = Experience::latest()->get();
        return view('experience', compact('experiences', 'lang'));
    }
}
