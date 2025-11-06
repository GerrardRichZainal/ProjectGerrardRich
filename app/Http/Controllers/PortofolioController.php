<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Portfolio;
use App\Models\Category;
use App\Models\Job;

class PortfolioController extends Controller
{
    // Tampilkan semua portfolio
    public function index()
    {
        $portfolios = Portfolio::with(['category', 'job'])->get();
        return response()->json($portfolios);
    }

    // Tampilkan satu portfolio
    public function show($id)
    {
        $portfolio = Portfolio::with(['category', 'job'])->findOrFail($id);
        return response()->json($portfolio);
    }

    // Simpan portfolio baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'job_id' => 'required|exists:jobs,id',
        ]);

        $portfolio = Portfolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image ?? 'https://via.placeholder.com/640x480',
            'category_id' => $request->category_id,
            'job_id' => $request->job_id,
        ]);

        return response()->json($portfolio, 201);
    }

    // Update portfolio
    public function update(Request $request, $id)
    {
        $portfolio = Portfolio::findOrFail($id);

        $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'category_id' => 'sometimes|required|exists:categories,id',
            'job_id' => 'sometimes|required|exists:jobs,id',
        ]);

        $portfolio->update($request->all());

        return response()->json($portfolio);
    }

    // Hapus portfolio
    public function destroy($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $portfolio->delete();

        return response()->json(['message' => 'Portfolio deleted successfully']);
    }
}
