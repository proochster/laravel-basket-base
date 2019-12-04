<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function money_format($value) {
        return '£' . number_format($value); // ($value, 2) / for .00 format
    }

    public function pickItems($cart){

        $cart = $cart->each(function ($item, $key) {

            $product = Product::where('id', $key)->first();

            /*
            * Makes sure to get the latest price form the Product Model rather than data submited in the basket form.
            */
            $item->price = $product->price;
            $item->priceFormat = $product->money_format($product->price);

            $item->slug = $product->slug;
            $item->details = $product->details;
        });

        return $cart;
        // dd($cart);
    }
}
