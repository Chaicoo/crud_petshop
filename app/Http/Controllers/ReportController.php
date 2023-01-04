<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController{
    public function index(){
        $clients = \DB::table('Cliente')
        ->count();

        $vets = \DB::table('Veterinario')
        ->count();

        $pets = \DB::table('Pet')
        ->count();

        $attendancesActive = \DB::table('Atendimento')
        ->where('Status', '=', 'Active')
        ->count();

        $attendancesConcluded = \DB::table('Atendimento')
        ->where('Status', '=', 'Conclud')
        ->count();

        return view('report.readReport', compact('clients', 'vets', 'pets', 'attendancesActive', 'attendancesConcluded'));
    }
}