<?php

namespace App\Http\Controllers;

use App\Product;
use Cart;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [];

        if(!\Cart::isEmpty()){
            
            $cart = Cart::getContent()->sort();
                       
            $products = new Product;
            
            $basketProducts = $products->pickItems($cart);
            
            $data = [
                'basket' => $basketProducts       
            ];          
        }
        
        $data = $data ?: ['basket_empty' => 'The basket is empty'];

        return view('basket')->with($data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {              

        $product = Product::where('id', $request->id)->first();

        Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $product->price, // Fetch product price from the Product Model rather than user form submission.
            'quantity' => $request->quantity
            // 'attribures' => array()
        ));

        return redirect()->back()->with('success_message', 'Added to the basket.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product)
    {
        Cart::update($product, array(
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            ),
        ));

        return redirect()->back()->with('basket_updated', 'Basket updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        Cart::remove($product);

        return redirect()->back()->with('item_removed', 'Item removed.');
    }
}
