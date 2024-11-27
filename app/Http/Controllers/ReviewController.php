<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

   
    public function store(Request $request)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review' => 'required|string',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        Review::create([
            'product_id' => $request->product_id, // Bạn cần gửi sản phẩm ID trong form
            'rating' => $request->rating,
            'review' => $request->review,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Review added successfully!');
    }
}