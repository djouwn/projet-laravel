<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Models\Product;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
   
    public function index()
    {
        $promotions = Promotion::with('product')->get();
        return view('promotions.index', compact('promotions'));
    }

    public function show($id)
    {
      
        $promotion = Promotion::findOrFail($id);

 
        return view('promotions.show', compact('promotion'));
    }
    public function create()
    {
        $products = Product::all();
        return view('promotions.create', compact('products'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|string',
            'rule' => 'required|string',
              
        ]);

        Promotion::create($request->all());

        return redirect()->route('promotions.index')->with('success', 'Promotion created successfully.');
    }

  
    public function edit(Promotion $promotion)
    {
        $products = Product::all();
        return view('promotions.edit', compact('promotion', 'products'));
    }

   
    public function update(Request $request, Promotion $promotion)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'type' => 'required|string',
            'rule' => 'required|string',
        ]);

        $promotion->update($request->all());

        return redirect()->route('promotions.index')->with('success', 'Promotion updated successfully.');
    }

    
    public function destroy(Promotion $promotion)
    {
        $promotion->delete();
        return redirect()->route('promotions.index')->with('success', 'Promotion deleted successfully.');
    }
}
