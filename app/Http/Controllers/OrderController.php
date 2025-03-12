<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('orders', [
            'orders' => Order::all()
        ]);
    }
    public function show(string $id)
    {
        return view('order',
            [
                'order' => Order::all()->where('id', $id)->first()
            ]);
    }
}

