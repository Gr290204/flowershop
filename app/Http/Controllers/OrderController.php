<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index(Request $request)
    {
        $perpage = $request->perpage ?? 2;
        return view('orders', [
            'orders' => Order::paginate($perpage)->withQueryString()
        ]);
    }
    public function show(string $id)
    {
        return view('order',
            [
                'order' => Order::all()->where('id', $id)->first()
            ]);
    }
    public function create()
    {
        return view('order_create', [
            'clients' => Client::all(),
            'statuses' => Status::all()
        ]);
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'client_id' => 'integer',
            'order_price' => 'required|integer',
            'order_status' => 'integer',
            'order_date' => 'required|date'
        ]);

        $order = new Order($validated);
        $order->save();

        return redirect('/order');
    }
    public function edit(string $id){
        return view('order_edit', [
            'order'=> Order::all()->where('id', $id)->first(),
            'clients' => Client::all(),
            'statuses' => Status::all()
        ]);
    }
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'client_id' => 'required|integer',
            'order_date' => 'required|date',
            'order_status' => 'required|integer',
            'order_price' => 'required|numeric'
        ]);

        $order = Order::findOrFail($id);
        $order->client_id = $validated['client_id'];
        $order->order_date = $validated['order_date'];
        $order->order_status = $validated['order_status'];
        $order->order_price = $validated['order_price'];
        $order->save();

        return redirect('/order');
    }

    public function destroy(string $id)
    {
        Order::destroy($id);
        return redirect('/order');
    }




}

