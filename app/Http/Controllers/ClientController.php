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
        \DB::table('Cliente')->where('Id', $Id)->delete();

        return redirect('/clientes');
    }
}