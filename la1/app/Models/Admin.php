<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
class Admin
{
    private $massuv ;

    public function createArray()
    {
        for ($i = 0; $i<5; $i++)
        {
            $this->massuv[$i] =  $i;
        }
    }

    public function addToBD()
    {
//        $regist = DB::table('tasks')->get();
        $regist = DB::select('SELECT body FROM tasks');
        var_dump($regist);
        $this->createArray();
//        return $this->massuv;
        return $regist;
    }

}

?>