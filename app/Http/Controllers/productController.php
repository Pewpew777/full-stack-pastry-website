<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class productController extends Controller
{
    public function showProducts(){
        $descriptions = [
        "Un bijou doré, au cœur tendre d’amande, sublimé par un glaçage jaune éclatant et une fleur raffinée.",
        "Croustillant à l’extérieur et fondant à l’intérieur, chaque bouchée révèle la douceur irrésistible de l’amande et de la pistache.",
        "Un mariage de finesse et d’intensité, où le chocolat enveloppe chaque bouchée d’une douceur veloutée."
         ];
        $bestsellerIds = [4, 8, 14];

        $found = Product::whereIn('id', $bestsellerIds)->get()->keyBy('id');

        $bestsellersOrdered = collect($bestsellerIds)

        ->map(fn($id) => $found->get($id))
        ->filter();
        $products = product::all();
        return view('welcome',compact('products','bestsellersOrdered','descriptions'));
    }

    public function showProduct($id){
        $product =product::findOrFail($id);
        return view('product.productDetails',compact('product'));
    }

    public function modify(){
        $products=product::orderBy('created_at','desc')->get();
        return view('admin.create',compact('products'));
    }


    public function storeproduct(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'priceamande' => 'required|numeric|min:0',
        'pricecacahuete' => 'required|numeric|min:0',
        'description',
        'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        'type' => 'required|in:modern,traditionnel',
        'available' => 'nullable|boolean'
    ]);

    // Handle image upload
    if ($request->hasFile('image')) {
        $path = $request->file('image')->store('products', config('filesystems.default'));
        $validated['image'] = $path;
    }

    // Default available to 1 if not provided
    $validated['available'] = $request->has('available') ? 1 : 0;

    Product::create($validated);

    return redirect()->route('admin.dashboard')->with('success', 'Product added successfully!');
}

    public function repture(Product $product)
    {
        $product->available = !$product->available;
        $product->save();

        return redirect()->back();
    }
    public function deleteproduct(product $product){
        $product->delete();
        return back()->with('success', 'Customer deleted successfully.');
    }

}
