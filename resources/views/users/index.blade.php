@extends('template.index')
@section('title', 'Listagem de Usuários')
@section('body')

<div class="text-orange-600 text-5xl pb-4 text-center">
    <h1>Listagem de Usuários</h1>
</div>
<div class="grid justify-items-center">
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-300 dark:text-gray-100">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th class="px-6 py-3" scope="col">ID</th>
                    <th class="px-6 py-3" scope="col">Nome</th>
                    <th class="px-6 py-3" scope="col">Email</th>
                    <th class="px-6 py-3" scope="col">Telefone</th>
                    <th class="px-6 py-3" scope="col">Is admin</th>
                    <th class="px-6 py-3" scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr onclick="window.location='{{ route('users.show', $user->id) }}'" class="bg-orange-800 border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-white cursor-pointer">
                    <th class="px-6 py-4 font-medium text-gray-500 whitespace-nowrap dark:text-white" scope="row">{{ $user->id }}</th>
                    <td class="text-center px-6 py-4">{{ $user->name }}</td>
                    <td class="text-center px-6 py-4">{{ $user->email }}</td>
                    <td class="text-center px-6 py-4">{{ $user->phone }}</td>
                    <td class="text-center px-6 py-4">{{ $user->is_admin }}</td>
                    <td class="btn-alert mr-1">
                        <form action="{{ route('users.delete', $user->id) }}" method="POST" class="inline">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="font-medium text-red-500 dark:text-blue-700 hover:underline">
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