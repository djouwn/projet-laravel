<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {
        $query = Product::query();

      
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
    
      
        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }
    
       
        $minPrice = $request->input('min-price', 0);
        $maxPrice = $request->input('max-price', 1000);
    
        if ($minPrice || $maxPrice) {
            $query->whereBetween('price', [$minPrice, $maxPrice]);
        }
    
        $products = $query->paginate(12); 
    
       
        $categories = Category::all();
    
        return view('welcome', compact('products', 'categories'));
    }
    public function index2(Request $request)
    {
        $products = Product::query()->limit(3)->get();


      
        if ($request->filled('search')) {
            $products->where('name', 'like', '%' . $request->search . '%');
        }
    
      
        if ($request->filled('category_id')) {
            $products->where('category_id', $request->category_id);
        }
    
       
        $minPrice = $request->input('min-price', 0);
        $maxPrice = $request->input('max-price', 1000);
    
        if ($minPrice || $maxPrice) {
             $products->whereBetween('price', [$minPrice, $maxPrice]);
        }
    
      
    
       
        $categories = Category::all();
    
        return view('products.index', compact('products', 'categories'));
    }

    public function showSneakers()
    {
        return view('sneakersdetails');
    }
    public function create()
    {
        return view('products.create');
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'matricule' => 'required|string',
            'quantity' => 'nullable|string',
            'availablecolor' => 'nullable|string',
            'availablesize' => 'nullable|string',
            'similarproducts' => 'nullable|string',
            'SKU' => 'nullable|in:stock,vide,waitingfor',
            'discount' => 'nullable|numeric',
            'category_id' => 'nullable|exists:categories,id',
            'gender' => 'nullable|string',
            'age' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'image_add1' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'image_add2' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'image_add3' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'producttype' => 'nullable|string',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->matricule = $request->input('matricule');
        $product->quantity = $request->input('quantity');
        $product->availablecolor = $request->input('availablecolor');
        $product->availablesize = $request->input('availablesize');
        $product->similarproducts = $request->input('similarproducts');
        $product->SKU = $request->input('SKU');
        $product->discount = $request->input('discount');
        $product->category_id = $request->input('category_id');
        $product->gender = $request->input('gender');
        $product->age = $request->input('age');
        $product->producttype = $request->input('producttype');

        
        foreach (['image', 'image_add1', 'image_add2', 'image_add3'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $file = $request->file($imageField);
                $filename = $file->store('products', 'public');
                $product->$imageField = $filename;
            }
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully!');
    }

   
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'matricule'=> 'required|numeric',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
    public function fetchwomen(Request $request)
    {
    
        $gender = $request->query('gender', 'women'); 

        
            $products = Product::where('gender', $gender)->get();
    

        return response()->json($products);
    }
    public function fetchman(Request $request)
    {
    
        $gender = $request->query('gender', 'man'); 

        
            $products = Product::where('gender', $gender)->get();
    

        return response()->json($products);
    }
    public function fetchkids(Request $request)
    {
    
        $gender = $request->query('gender', 'kids'); 

        
            $products = Product::where('gender', $gender)->get();
    

        return response()->json($products);
    }
    public function fetchacessories(Request $request)
    {
    
        $gender = $request->query('producttype', 'accessories'); 

        
            $products = Product::where('producttype', $gender)->get();
    

        return response()->json($products);
    }

}
