<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class getfilms extends Model
{
    use HasFactory;

    public static function search($search)
    {
        $orders = Order::search('Star Trek')->get();
    }
}
