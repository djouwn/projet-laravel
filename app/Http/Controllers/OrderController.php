<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    
    public function getTotalBilling()
    {
        $userId = auth()->id();
        $totalBilling = Order::where('user_id', $userId)->sum('total_billing');

        return response()->json(['total_billing' => $totalBilling]);
    }

  
    public function addToOrder(Request $request)
    {
        $product = Product::find($request->product_id);
        $quantity = $request->quantity;

        if (!$product) {
            return response()->json(['error' => 'Product not found.'], 404);
        }

        $totalPrice = $quantity * $product->price;

        Order::updateOrCreate(
            ['user_id' => auth()->id(), 'product_id' => $product->id],
            ['quantity' => $quantity, 'total_billing' => $totalPrice]
        );

        return response()->json([
            'message' => 'Product added to order.',
            'total_billing' => $totalPrice,
        ]);
    }
}
