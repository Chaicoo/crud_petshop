<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PetController{
    public function index(){
        $pets = \DB::table('Pet')
        ->join('Cliente', 'Pet.Cliente_id', '=', 'Cliente.Id')
        ->select('Pet.idPet','Pet.Nome','Pet.Raca','Pet.Idade','Cliente.Nome as NomeCliente')
        ->get();

        return view('pet.readPet', compact('pets'));
    }

    public function create(){
        $clients = \DB::table('Cliente')
        ->select ('Id','Nome')
        ->get();

        return view('pet.addPet', compact('clients'));
    }

    public function saveCreate(Request $request){
        \DB::table('Pet')->insert([
            'Nome' => $request->Nome,
            'Especie' => $request->Especie,
            'Raca' => $request->Raca,
            'Idade' => $request->Idade,
            'Cliente_Id' => $request->Cliente_Id
        ]);

        return redirect('/pets');
    }

    public function delete($id){
        \DB::table('Pet')->where('idPet', $id)->delete();

        return redirect('/pets');
    }
}