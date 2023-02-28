@extends('template.index')
@section('title', 'recipe edit')
@section('body')

<div class="text-orange-600 text-4xl py-4 text-center">
        <h1>Editar Receita</h1>
</div>

<div class="justify-items-center px-72">
    
    
    <form method="POST" action="{{ route('recipes.update', $recipes->id) }}" enctype="multipart/form-data">
        @method("PUT")
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nome')" />

                <x-input id="name" value="{{ $recipes->name }}" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" type="text" name="name" />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <x-label for="ingredients" :value="__('Ingredientes')" />

                <textarea name="preparation" id="preparation" cols="30" rows="5" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" type="text">{{ $recipes->ingredients }}</textarea>
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('preparation')" />
                
                <textarea name="preparation" id="preparation" cols="30" rows="5" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" type="text">{{ $recipes->preparation }}</textarea>
            </div>
                
            <!-- Password -->
            <div class="mt-4">
                <x-label for="preparation_second" :value="__('continuação')" />
                
                <textarea name="preparation_second" id="preparation_second" cols="30" rows="5" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" type="text">{{ $recipes->preparation_second }}</textarea>
            </div>

            <div class="mt-4">
                <x-label for="preparation_time" :value="__('Tempo de preparação')" />

                <x-input id="preparation_time" value="{{ $recipes->preparation_time }}" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" type="text" name="preparation_time" />
            </div>

            <div class="mt-4">
                <x-label for="portions" :value="__('Porções')" />

                <x-input id="portions" value="{{ $recipes->portions }}" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" type="text" name="portions" />
            </div>

            <div class="mt-4">
            <x-label for="image" :value="__('Imagem')" />
        
                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-700 focus:outline-none dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400" id="image" type="file" name="image">
            </div>


            <div class="flex items-center justify-end mt-4">
                    <x-button class="ml-4">
                        {{ __('Editar Receita') }}
                    </x-button>
            </div>
    </form>
</div>

@endsection