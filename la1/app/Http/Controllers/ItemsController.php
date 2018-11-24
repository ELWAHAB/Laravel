<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Item;

class ItemsController extends Controller
{
    public function show()
    {
        $names = Item::all();
        $seconds = time();
        return view('tasks.admin', ['names' => $names,
                                          'seconds' => $seconds ]);
    }
}
