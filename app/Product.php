<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function money_format($value) {
        return '£' . number_format($value, 2);
    }
}
