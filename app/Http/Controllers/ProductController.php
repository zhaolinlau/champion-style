<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // Display the shop page for staff to add new products
    public function showStaffShopPage()
{
    $products = Product::all();
    return view('staff.shop', compact('products'));
}


public function showCustomerShopPage()
{
    $products = Product::all();
    return view('shop', compact('products'));
}



    public function showAddProductPage() {
        return view('staff.add-product');
    }

    // Handle the form submission to add a new product
    public function addProduct(Request $request) {
        // Validate the request data
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle the image upload
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        // Create a new product
        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image' => $imageName,
        ]);

        // Redirect back to the shop page with a success message
        return redirect()->route('staff.shop')->with('success', 'Product added successfully.');
    }

    public function deleteProduct($id) {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('staff.shop')->with('success', 'Product deleted successfully.');
    }
    
    public function updateProductStatus($id) {
        $product = Product::findOrFail($id);
        $product->status = $product->status === 'in_stock' ? 'out_of_stock' : 'in_stock';
        $product->save();
        return redirect()->route('staff.shop')->with('success', 'Product status updated successfully.');
    }

    public function addFavorite($id)
    {
        $user = Auth::user();
        $product = Product::findOrFail($id);

        if (!$user->favoriteProducts->contains($product->id)) {
            $user->favoriteProducts()->attach($product->id);
        }

        return redirect()->back()->with('success', 'Product added to favorites!');
    }

    public function removeFavorite($id)
    {
        $user = Auth::user();
        $product = Product::findOrFail($id);

        if ($user->favoriteProducts->contains($product->id)) {
            $user->favoriteProducts()->detach($product->id);
        }

        return redirect()->back()->with('success', 'Product removed from favorites!');
    }
}
