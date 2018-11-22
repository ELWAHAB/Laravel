<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\Integer;

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
        $mass = $this->selectInf();

        return $mass;
    }

    public function insertInf($text)
    {
        DB::insert("INSERT INTO tasks(body, time) VALUES (?, ?)", [$text, time()] );
    }

    public function selectInf()
    {
        $bodies = DB::select('SELECT body FROM tasks');

        return $bodies;
    }

    public function deleteInf($id)
    {
        DB::delete('DELETE FROM tasks WHERE id = ?', [$id]);
    }

}

?>