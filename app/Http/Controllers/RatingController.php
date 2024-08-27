<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::all();
        return view('ratings.index', compact('ratings'));
    }

    public function create()
    {
        return view('ratings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'product_id' => 'required|exists:products,id',
            'rating' => 'required|in:1,2,3,4,5',
        ]);

        Rating::create($request->all());

        return redirect()->route('ratings.index')->with('success', 'Rating added successfully.');
    }

    public function edit(Rating $rating)
    {
        return view('ratings.edit', compact('rating'));
    }

    public function update(Request $request, Rating $rating)
    {
        $request->validate([
            'rating' => 'required|in:1,2,3,4,5',
        ]);

        $rating->update($request->only('rating'));

        return redirect()->route('ratings.index')->with('success', 'Rating updated successfully.');
    }

    public function destroy(Rating $rating)
    {
        $rating->delete();

        return redirect()->route('ratings.index')->with('success', 'Rating deleted successfully.');
    }
}

