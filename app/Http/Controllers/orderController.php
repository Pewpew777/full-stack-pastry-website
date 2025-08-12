<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\order;
use App\Models\customer;
class orderController extends Controller
{
    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);

        $cart[] = [
            'product_id'   => $request->product_id,
            'name'         => $request->name,
            'filling'      => $request->filling,
            'quantity'     => (int) $request->quantity,
            'specification'=> $request->specification,
            'total_price'  => (float) $request->total_price
        ];

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Produit ajouté au panier');

        
    }
    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('orders.cart', compact('cart'));
    }

    public function submit(Request $request){

        $validated =$request->validate([
            'name'=>'required|string|max:255',
            'phone'=>'required|string|max:20',
            'wilaya' => 'required|string|max:255',
            'commune'=>'required|string|max:255',
            'date' => 'required|date',
        ]);
        $customer=customer::create([
            'name'=>$validated['name'],
            'phone'=>$validated['phone'],
            'wilaya' => $validated['wilaya'],
            'commune'=>$validated['commune'],
            'date' => $validated['date'],
        ]);
        $cart=  session('cart',[]);
        foreach($cart as $item){
            order::create([
            'product_id'   =>$item['product_id'],
            'customer_id'=>$customer->id,
            'name'=> $item['name'],
            'filling'=> $item['filling'],
            'quantity'=> $item['quantity'],
            'specification'=>$item['specification'] ?? null,
            'total'=>$item['total_price']
            ]);
        };
        session()->forget('cart');
        return redirect()->route('orders.success')->with('success', 'Commande confirmée !');
        }       
        public function success(){
            return view('orders.succes');
        }

}
