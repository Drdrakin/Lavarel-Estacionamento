<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cadastroController;
use App\Http\Controllers\veiculoController;

//É passado em um array, o nome da controller com seu tipo- ::class e nome da ACTION 'index'
//Ou seja, não é passado dados aqui, sendo exclusivo apenas para rotas e actions
//PS: as controllers precisam ser importadas lá em cima
Route::get('/vehicles', [veiculoController::class, 'create']);

Route::get('/', [cadastroController::class, 'index']);

Route::get('/login', function () {
    return view('login');
});

Route::get('/clientSignup', [cadastroController::class, 'create']);

Route::get('/listVehicles', [veiculoController::class, 'index']);

//É possível passar parametros da seguinte forma:

Route::get('/logs/{data?}', function ($data = 'Hoje') {
    return view('logfilter', ['data' => $data]);
});

