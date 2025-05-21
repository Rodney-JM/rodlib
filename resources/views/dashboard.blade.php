{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1 class="mt-4">Bem-vindo ao Dashboard</h1>
                <p>Você está logado com sucesso!</p>
                <div class="alert alert-info">
                    Esta é a sua área administrativa do RodinLib.
                </div>
            </div>
        </div>
    </div>
@endsection
