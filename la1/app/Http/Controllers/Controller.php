<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;



    public function index() {
         return view('welcome');
    }

    public function index2()
    {
        $name = 'Alex';
        return view('admin', [
            'name' => $name
        ]);
    }

    public function dbToView()
    {
        $tasks = DB::table('tasks')->get();

        return view('admin', compact('tasks'));
    }

}