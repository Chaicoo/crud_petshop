<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Veterinario;
use App\Http\Controllers\VetController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/veterinarios', [VetController::class, 'index']);
Route::get('/adicionar-veterinario', [VetController::class, 'create']);
Route::post('/cadastrar-vet', [VetController::class, 'saveCreate']);
Route::get('/editar-vet/{idVeterinario}', [VetController::class, 'edit']);
Route::post('/save-edit-vet', [VetController::class, 'update']);
Route::get('/delete-vet/{idVeterinario}', [VetController::class, 'delete']);

Route::get('/clientes', [ClientController::class, 'index']);
Route::get('/adicionar-cliente', [ClientController::class, 'create']);
Route::post('/cadastrar-cliente', [ClientController::class, 'saveCreate']);
Route::get('/editar-cliente/{Id}', [ClientController::class, 'edit']);
Route::post('/save-edit-cliente', [ClientController::class, 'update']);
Route::get('/delete-cliente/{Id}', [ClientController::class, 'delete']);

Route::get('/atendimentos', [AttendanceController::class, 'index']);
Route::get('/adicionar-atendimento', [AttendanceController::class, 'create']);
Route::post('/cadastrar-atendimento', [AttendanceController::class, 'saveCreate']);
Route::get('/editar-atendimento/{Id}', [AttendanceController::class, 'edit']);
Route::post('/save-edit-atendimento', [AttendanceController::class, 'update']);
Route::get('/delete-atendimento/{Id}', [AttendanceController::class, 'delete']);

Route::get('/pets', [PetController::class, 'index']);
Route::get('/adicionar-pet', [PetController::class, 'create']);
Route::post('/cadastrar-pet', [PetController::class, 'saveCreate']);
Route::get('/editar-pet/{Id}', [PetController::class, 'edit']);
Route::post('/save-edit-pet', [PetController::class, 'update']);
Route::get('/delete-pet/{Id}', [PetController::class, 'delete']);

Route::get('/report', [ReportController::class, 'index']);