@extends('template.index')
@section('title', 'Listagem de Usuários')
@section('body')

<div class="grid aling-center pt-4">
    <div class="text-black-600 text-5xl pb-4 text-center">
        <h1>Listagem de Usuários</h1>
    </div>
    <div class="pl-60">
        <table class="table-fixed border-separate border-spacing-y-3">
            <thead>
                <tr class="bg-orange-600 shadow-lg rounded-md">
                    <th class="p-4" scope="col">ID</th>
                    <th class="p-4" scope="col">Nome</th>
                    <th class="p-4" scope="col">Email</th>
                    <th class="p-4" scope="col">Telefone</th>
                    <th class="p-4" scope="col">Is admin</th>
                    <th class="p-4" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr onclick="window.location='{{ route('users.show', $user->id) }}'" class="table-row shadow-lg rounded-md bg-orange-500 hover:bg-white cursor-pointer">
                    <th class="text-center pr-4" scope="row">{{ $user->id }}</th>
                    <td class="text-center pr-4">{{ $user->name }}</td>
                    <td class="text-center pr-4">{{ $user->email }}</td>
                    <td class="text-center pr-4">{{ $user->phone }}</td>
                    <td class="text-center pr-4">{{ $user->is_admin }}</td>
                    <td class="btn-alert mr-1">
                        <form action="{{ route('users.delete', $user->id) }}" method="POST" class="inline">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn-danger mx-4">
                                Deletar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection