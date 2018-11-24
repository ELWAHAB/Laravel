<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

use Illuminate\Support\Facades\DB;

use App\Models\Admin;
use App\Task as Task;
use App\Item as Item;

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

    public function dbAdmin()
    {
        $views = new Admin();

        /*for ($i = 1; $i <= 6; $i++ )
                {
                    $views->insertInf('Task '.$i);
                }*/

        $bodys = '*';
//        $names = $views->selectInf($bodys);
//        $names = Item::incomplete();

        $names = Task::all();
        $seconds = time();

        return view('tasks.admin', ['names' => $names,
                                    'seconds' => $seconds ]);
    }

    public function dbHome()
    {
        $views = new Admin();

        $colomns = 'body';

        /*for ($i = 1; $i<= 6; $i++)
        {
            $views->updateInf('Page #'.$i, $i);
        }*/


        $names = $views->selectInf($colomns);

        return view('home', ['infs' => $names,
            'justInf' => $colomns]);
    }

    public function dbAdminInf($id)
    {
        $task = DB::table('tasks')->find($id);
//        dd($task);
        return view('tasks.show', compact('task'));
    }

}

