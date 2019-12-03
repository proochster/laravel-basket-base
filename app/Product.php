<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function money_format($value) {
        return '£' . number_format($value, 2);
    }

    public function pickItems($cart){

        return $cart = $cart->each(function ($item, $key) {

            $product = Product::where('id', $key)->first();

            $item->put('slug', $product->slug);

            /*
            * Get latest price form the Product Model rather than data submited in the basket form.
            */
            $item->price = $product->price;
        });
    }
}
