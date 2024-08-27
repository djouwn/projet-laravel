<?php
namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    public function index()
    {
        $favorites = Favorite::where('user_id', Auth::id())->with('product')->get();
        return view('favorites.index', ['favorites' => $favorites]);
    }

    public function show(Product $product)
    {
        $isFavorite = Favorite::where('product_id', $product->id)->where('user_id', Auth::id())->exists();
        return view('products.show', ['product' => $product, 'isFavorite' => $isFavorite]);
    }

    public function store(Request $request)
    {
  
        $request->validate([
            'id' => 'required|integer',
        ]);

        
        $user = Auth::user();
        $itemId = $request->input('id');

       
        $favorite = new Favorite();
        $favorite->user_id = $user->id;
        $favorite->item_id = $itemId;
        $favorite->save();

        return response()->json(['success' => true]);
    }

    public function destroy($id)
    {
        $favorite = Favorite::where('product_id', $id)->where('user_id', Auth::id())->first();

        if ($favorite) {
            $favorite->delete();
            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false], 404);
    }
}

