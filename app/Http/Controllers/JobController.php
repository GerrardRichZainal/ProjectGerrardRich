<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    // Tampilkan semua data job
    public function index()
    {
        $jobs = Job::all();
        return response()->json($jobs);
    }

    // Tampilkan satu job berdasarkan ID
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return response()->json($job);
    }

    // Simpan job baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $job = Job::create([
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
        ]);

        return response()->json($job, 201);
    }

    // Update job
    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $job->update([
            'title' => $request->title,
            'slug' => \Str::slug($request->title),
        ]);

        return response()->json($job);
    }

    // Hapus job
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return response()->json(['message' => 'Job deleted successfully']);
    }
}
