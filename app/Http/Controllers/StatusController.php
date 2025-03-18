<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return view('status', [
            'status' => Status::all()
        ]);
    }

    public function show(string $id)
    {
        return view('status',
            [
                'status' =>Status::all()->where('id', $id)->first()
            ]);
    }
}
