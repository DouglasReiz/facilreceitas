@extends('template.index')
@section('title', '')
@section('body')

<div class="bg-white shadow-lg relative flex justify-center rounded-lg w-4/6">
    <div class="my-6 mx-auto">
        <h1 class="font-bold my-2 text-indigo-500">Dados:</h1>
        <h4 class="font-bold my-2">Nome: <span class="font-medium">{{ $user->name }}</span></h4>
        <h4 class="font-bold my-2">Sobrenome: <span class="font-medium">{{ $user->last_name }}</span></h4>
        <h4 class="font-bold my-2">Email: <span class="font-medium">{{ $user->email }}</span></h4>
        <h4 class="font-bold my-2">CPF: <span class="font-medium">{{ $user->cpf }}</span></h4>
        <h4 class="font-bold my-2">Telefone: <span class="font-medium">{{ $user->phone }}</span></h4>
        <h4 class="font-bold my-2">Data de Nascimento: <span class="font-medium">{{ date("d/m/Y ", strtotime($user->date_of_birth)) }}</span></h4>
        <h4 class="font-bold my-2">Cadastrado em: <span class="font-medium">{{ date("d/m/Y | H:i", strtotime($user->created_at)) }}</span></h4>
        <h4 class="font-bold my-2">Atualizado em: <span class="font-medium">{{ date("d/m/Y | H:i", strtotime($user->updated_at)) }}</span></h4>
    </div>
</div>

@endsection