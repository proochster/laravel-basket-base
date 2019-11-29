<?php

namespace App\Http\Controllers;

use Darryldecode\Cart\Cart;

use App\Product;
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

        // return session()->all();
        return view('basket');
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
        // if( auth()->check() )
        // {
        //     $userId = auth()->user()->id;
        // } else {
        //     $userId = $request->session()->get('_token');     
        // }
            // dd($request->session()->get('_token'));
    
        // $product = Product::find($request->id);
        // dd($product);
        // \Cart::session($request->session()->get('_token'));
        \Cart::add(array(
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attribures' => array()
            ));

        // \Cart::associate($request->id, App\Product::class);
        // $product = new Product();
        // dd($request->session()->all());
        // $cartItem::add(array(
        //     'id' => $request->id,
        //     'name' => $request->name,
        //     'price' => $request->price,
        //     'quantity' => $request->quantity,
        //     'attribures' => array(),
        //     'associatedModel' => 'Product'
        // ));
        // dd($cartItem);

        // $cartItem = Cart::add('123abc', 'Product1', 1, 10.00);
        // Cart:associate($cartItem->rowId, \App\Product::class); // Or just Cart:associate($cartItem->rowId, 'App\Product');

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
