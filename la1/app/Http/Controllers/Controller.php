<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

use Illuminate\Support\Facades\DB;

use App\Models\Admin;


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
        $views = new Admin();

       /* for ($i = 1; $i <= 6; $i++ )
                {
                    $views->insertInf($i);
                }*/

       $bodys = 'body';
        $names = $views->selectInf($bodys);

        $seconds = time();

        return view('admin', ['names' => $names,
                                    'seconds' => $seconds ]);
    }

    public function dbHome()
    {
        $views = new Admin();

        $bodys = 'id';

        $names = $views->selectInf($bodys);

        return view('home', [ 'infs' => $names,
                                    'justInf' => $bodys ]);
    }

    public function dbInf($id)
    {
        $views = new Admin();

/*        for ($i = 2; $i <= 6; $i++ )
                {
                    $views->deleteInf($i);
                }*/

        $names = $views->addToBD();

        $seconds = time();

        $task = DB::table('tasks')->find($id);

        dd($task);
        return view('admin', ['names' => $names,
                                    'seconds' => $seconds ]);
    }

}
