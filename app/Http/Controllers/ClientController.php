<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController{
    public function index(){
        $clients = \DB::table('Cliente')->select('Id','Nome','CPF','Telefone')->get();
        return view('cliente.readClients', compact('clients'));
    }

    public function create(){
        return view('cliente.addClient');
    }

    public function saveCreate(Request $request){
        \DB::table('Cliente')->insert([
            'Nome' => $request->Nome,
            'CPF' => $request->CPF,
            'Telefone' => $request->Telefone
        ]);

        return redirect('/clientes');
    }

    public function edit($Id){
        $client = \DB::table('Cliente')
        ->select('*')
        ->whereRaw('Id = ?', [$Id])
        ->get();


        return view('cliente.editClient',  compact('client'));
    }

    public function update(Request $request){
        \DB::table('Cliente')
        ->where('Id', [$request->Id])
        ->update(['Nome' => $request->Nome,
                  'CPF' => $request->CPF,
                  'Telefone' => $request->Telefone]);

        return redirect('/clientes');
    }

    public function delete($Id){
        \DB::table('Atendimento')
        ->join('Pet', 'Atendimento.Pet_idPet', '=', 'Pet.idPet')
        ->join('Cliente', 'Cliente.Id', '=', 'Pet.Cliente_Id')
        ->whereRaw('Atendimento.Pet_idPet = Pet.idPet AND Pet.Cliente_Id = ?', $Id)
        ->delete();

        \DB::table('Pet')->where('Cliente_Id', $Id)->delete();
        \DB::table('Cliente')->where('Id', $Id)->delete();

        return redirect('/clientes');
    }
}