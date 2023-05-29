<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Support\Facades\DB;

class MachinesController{
    
    public function index(){
        //$machines = DB::select('SELECT id, name FROM machines');
        // O dd imprime o inspecionamento do objeto na tela e pausa o processamento.
        //dd($machines);

        $machines = Machine::all();
        // dd($machines);

        return view('machines.index')->with('machines', $machines);
    }

    public function show($id)
    {
        echo "<h1>Visualizar a máquina $id</h1>";
    }
}