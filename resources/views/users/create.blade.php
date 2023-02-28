@extends('template.index')
@section('title', 'Criar Usuário')
@section('body')

<div class="grid justify-items-center">
    <div class="px-10 w-2/6">

        <div class="text-orange-600 text-4xl py-4 text-center">
            <h1>Criar Receitas</h1>
        </div>

        <form action=" {{ route('users.store')}} " method="POST" enctype="multipart/form-data" enctype="multipart/form-data">
            @csrf

            <!-- Name -->
            <div>
                <label for="name" class="block font-medium text-sm text-orange-700"> Digite o Nome</label>

                <input id="name" class="block mt-1 w-full rounded-md shadow-sm border-orange-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="name" required >
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <label for="phone" :value="Telefone" class="block font-medium text-sm text-orange-700">Telefone</label>

                <input id="phone" class="block mt-1 w-full rounded-md shadow-sm border-orange-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="phone" required >
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" class="block font-medium text-sm text-orange-700">Email</label>

                <input id="email" class="block mt-1 w-full rounded-md shadow-sm border-orange-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" required >
            </div>

            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="block font-medium text-sm text-orange-700">Digite a Senha</label>

                <input id="password" class="block mt-1 w-full rounded-md shadow-sm border-orange-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="new-password">
            </div>

            
            <div class="mt-4">
                <label for="password_confirmation" class="block font-medium text-sm text-orange-700">Confirmar Senha</label>

                <input id="password_confirmation" class="block mt-1 w-full rounded-md shadow-sm border-orange-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password_confirmation" required >
            </div> 

            <div class="mt-4">    
                <x-button class="">
                            {{ __('Criar') }}
                </x-button>
            </div>
        </form>

    </div>
</div>

@endsection