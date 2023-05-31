<?php

namespace App\Http\Controllers;

use App\Models\Machine;
use Illuminate\Http\Request; 
//use Illuminate\Http\Client\Request; /*Instrução utilizada no mini curso de Laravel gratuito do CELKE*/
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

    public function show(Machine $machine)
    {
        return view('machines.show')->with('machine', $machine);
    }

    public function create(){
        return view('machines.create');
    }

    // Esse método mostra três formas de inserir os dados no banco de dados.
    public function store(Request $request){
        // Exemplo básico
        
        /*$machines = new Machine();
        $machines->name = $request->name;
        $machines->save();*/

        //dd($request->all());
        //Machine::create($request->all());

        // Somente o campo nome
        Machine::create($request->only(['name']));

        return redirect('machines')->with('success','Máquina cadastrada com sucesso!');

    }
}