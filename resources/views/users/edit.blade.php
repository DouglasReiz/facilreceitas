@extends('template.index')
@section('title', 'User edit')
@section('body')


<div class="text-orange-600 text-4xl py-4 text-center">
        <h1>Editar Usuário</h1>
</div>

<div class="grid justify-items-center">
    
    <form method="POST" action="{{ route('users.update', $user->id) }}" enctype="multipart/form-data">
        @method("PUT")
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nome')" />

                <x-input id="name" value="{{ $user->name }}" class="block mt-1 w-full" type="text" name="name" />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-label for="phone" :value="__('Telefone')" />

                <x-input id="phone" value="{{ $user->phone }}" class="block mt-1 w-full" type="text" name="phone" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />
                
                <x-input id="email" value="{{ $user->email }}" class="block mt-1 w-full" type="email" name="email" />
                </div>
                
                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Senha')" />
                    
                    <x-input id="password" class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" />
                </div>
                
                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirmar Senha')" />
                    
                    <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" />
                </div>
                
                <div class="mt-4">
                    <label for="image" class="block font-medium text-sm text-gray-200">Imagem</label>
            
                    <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-700 focus:outline-none dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400" id="image" type="file" name="image">
                </div>
                @if (!auth()->user()->is_admin)
                <div class="flex items-center justify-end mt-4">
                    @else
                    <div class="flex items-center justify-between mt-4">
                        <div class="flex items-center mr-4">
                            <input id="administrator" type="radio" value="admin" name="type_user" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="administrator" class="ml-2 text-sm font-medium text-orange-500 bg-black rounded-lg px-2">Aministrador</label>
                        </div>
                        <div class="flex items-center mr-4">
                            <input checked id="user" type="radio" value="user" name="type_user" class="w-4 h-4 btn-radio">
                            <label for="user" class="ml-2 text-sm font-medium text-orange-500 bg-black rounded-lg px-2">Usuário comum</label>
                        </div>
                        @endif


                        <x-button class="ml-4">
                            {{ __('Editar Usuário') }}
                        </x-button>
                    </div>
                </div>
    </form>
</div>

@endsection