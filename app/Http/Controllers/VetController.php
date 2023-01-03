<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VetController{
    public function index(){
        $vets = \DB::table('Veterinario')->select('idVeterinario','Nome','CRMV','Telefone')->get();
        return view('veterinario.readVet', compact('vets'));
    }

    public function create(){
        return view('veterinario.addVet');
    }

    public function saveCreate(Request $request){
        \DB::table('Veterinario')->insert([
            'Nome' => $request->Nome,
            'CRMV' => $request->CRMV,
            'Telefone' => $request->Telefone
        ]);
    
        return redirect('/veterinarios');
    }

    public function edit($idVeterinario){
        $veterinario = \DB::table('Veterinario')
        ->select('*')
        ->whereRaw('idVeterinario = ?', [$idVeterinario])
        ->get();
    
    
        return view('veterinario.editVet',  compact('veterinario'));
    }

    public function update(Request $request){
        $veterinario = \DB::table('Veterinario')
        ->where('idVeterinario', [$request->idVeterinario])
        ->update(['Nome' => $request->Nome,
                  'CRMV' => $request->CRMV,
                  'Telefone' => $request->Telefone]);
    
    
        return redirect('/veterinarios');
    }

    public function delete($idVeterinario){
        \DB::table('Veterinario')->where('idVeterinario', $idVeterinario)->delete();

        return redirect('/veterinarios');
    }
}