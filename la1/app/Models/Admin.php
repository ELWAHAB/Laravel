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
        $times = time();

        DB::insert('INSERT INTO tasks(body, times) VALUES (?, ?)', [$text, $times] );
    }

    public function selectInf($bodys = 'body')
    {
        $bodies = DB::select('SELECT '.$bodys.' FROM tasks');

        return $bodies;
    }

    public function deleteInf($id)
    {
        DB::delete('DELETE FROM tasks WHERE id = ?', [$id]);
    }

    public function updateInf( $bodys, $id)
    {
        DB::update('UPDATE tasks SET body = ? WHERE id = ?', [$bodys, $id]);
    }
}

?>