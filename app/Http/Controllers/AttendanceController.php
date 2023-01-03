<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendanceController{
    public function index(){
        $attendances = \DB::table('Atendimento')
        ->join('Veterinario', 'Atendimento.idVeterinario', '=', 'Veterinario.idVeterinario')
        ->join('Pet', 'Atendimento.Pet_idPet', '=', 'Pet.idPet')
        ->select('Atendimento.idAtendimento','Atendimento.Data','Atendimento.Descricao','Veterinario.Nome as NomeVeterinario','Pet.Nome as NomePet')
        ->get();

        return view('atendimento.readAttendance', compact('attendances'));
    }

    /*
    public function readPets(){
        $pets = \DB::table('Pet')
        ->select ('idPet','Nome')
        ->get();

        return view('atendimento.addAttendance', compact('pets'));
    }

    public function readVets(){
        $vets = \DB::table('Veterinario')
        ->select ('idVeterinario','Nome')
        ->get();

        return view('atendimento.addAttendance', compact('vets'));
    }
    */

    public function create(){
        $pets = \DB::table('Pet')
        ->select ('idPet','Nome')
        ->get();

        $vets = \DB::table('Veterinario')
        ->select ('idVeterinario','Nome')
        ->get();

        return view('atendimento.addAttendance', compact('pets','vets'));
    }

    public function saveCreate(Request $request){
        \DB::table('Atendimento')->insert([
            'Data' => $request->Data,
            'Descricao' => $request->Descricao,
            'idVeterinario' => $request->idVeterinario,
            'Pet_idPet' => $request->Pet_idPet
        ]);

        return redirect('/atendimentos');
    }

    public function edit($idAtendimento){
        $attendance = \DB::table('Atendimento')
        ->select('*')
        ->whereRaw('idAtendimento = ?', [$idAtendimento])
        ->get();

        return view('atendimento.editAttendance',  compact('attendance'));
    }

    public function update(Request $request){
        $attendance = \DB::table('Atendimento')
        ->where('idAtendimento', [$request->idAtendimento])
        ->update(['Data' => $request->Data,
                  'Descricao' => $request->Descricao,
                  'idVeterinario' => $request->idVeterinario,
                  'Pet_idPet' => $request->Pet_idPet]);

        return redirect('/atendimentos');
    }

    public function delete($idAtendimento){
        \DB::table('Atendimento')->where('idAtendimento', $idAtendimento)->delete();

        return redirect('/atendimentos');
    }


}