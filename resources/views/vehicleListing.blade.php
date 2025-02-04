@extends('layouts.main')

@section('title', 'Veículos')

@section('content')
    <h1>Listagem de Veículos Presentes</h1>

    <div class="row">
        @foreach ($veiculos as $veiculo)
            @if ($veiculo->deletado == false)
                <div class="card col-md-4 mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{$veiculo->modelo}}</h5>
                        <p class="card-text little-margin">Placa: {{$veiculo->placa}}</p>
                        <p class="card-text little-margin">Cor: {{$veiculo->cor}}</p>
                        <p class="card-text little-margin">Dono: {{$veiculo->cliente->nome}}</p>
                        <p class="card-text little-margin">Chegou em: {{$veiculo->hora_entrada}}</p>
                        <a href="/editVehicle/{{$veiculo->id}}" class="btn btn-success">Alterar Dados</a>
                        <form action="/listVehicles/{{$veiculo->id}}" method="POST" class="form-card">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Retirar Veículo</button>
                        </form>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
    

@endsection