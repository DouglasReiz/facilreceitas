@extends('template.index')
@section('title', 'Listagem de Usuários')
@section('Body')

<div class="aling-center pt-4">
    <div class="text-black-600 text-5xl pb-4 text-center">
        <h1>Listagem de Usuários</h1>
    </div>
    <div class="pl-60">
        <table class="table-auto border-separate border">
            <thead>
                <tr class="aling-center">
                    <th class="border" scope="col">ID</th>
                    <th class="border" scope="col">Nome</th>
                    <th class="border" scope="col">Email</th>
                    <th class="border" scope="col">Telefone</th>
                    <th class="border" scope="col">Is admin</th>
                    <th class="border" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr >
                    <th class="border" scope="row">{{ $user->id }}</th>
                    <td class="flex-start border">{{ $user->name }}</td>
                    <td class="text-start border">{{ $user->email }}</td>
                    <td class="flex-start border">{{ $user->phone }}</td>
                    <td class="text-center border">{{ $user->is_admin }}</td>
                    <td class="border"><a href="{{ route('users.show', $user->id)}}">Vizualizar</a> Editar</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>