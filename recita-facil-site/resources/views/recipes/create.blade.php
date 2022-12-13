@extends('template.index')
@section('title', 'Criar Usuário')
@section('body')

<div class="grid justify-items-center">
    <div class="px-10 w-2/6">

        <div class="text-black-600 text-4xl py-4 text-center">
            <h1>Criar Receitas</h1>
        </div>

        <form action=" {{ route('recipes.store')}} " method="POST" enctype="multipart/form-data">
            @csrf
        
            <!-- Name -->
            <div>
                <label for="name" class="block font-medium text-sm text-gray-700"> Digite o Nome</label>
        
                <input id="name" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" type="text" name="name" required >
            </div>
        
            <!-- Dificulty -->
            <div class="mt-4">
                <label for="difficulty" :value="Difficulty" class="block font-medium text-sm text-gray-700">Dificuldade</label>
        
                <input id="difficulty" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" type="text" name="difficulty" required >
            </div>
        
            
            <!-- ingredientes -->
            <div class="mt-4">
                <label for="ingredients" class="block font-medium text-sm text-gray-700">Ingredientes</label>
                
                <textarea class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" name="ingredients" id="ingredients" cols="30" rows="5"></textarea>
            </div>
            
            <!-- Preparation -->
            <div class="mt-4">
                <label for="preparation" class="block font-medium text-sm text-gray-700">Modo de preparo</label>

                <textarea class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" name="preparation" id="preparation" cols="30" rows="5"></textarea>
        
            </div>

            <!-- Preaparation_Time -->
            <div class="mt-4">
                <label for="preparation_time" :value="preparation_time" class="block font-medium text-sm text-gray-700">Tempo de preparo</label>
        
                <input id="preparation_time" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" type="text" name="preparation_time" required >
            </div>

            <!-- Portions -->
            <div class="mt-4">
                <label for="portions" :value="portions" class="block font-medium text-sm text-gray-700">Porções</label>
        
                <input id="portions" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-orange-300 focus:ring focus:ring-orange-200 focus:ring-opacity-50" type="text" name="portions" required >
            </div>

            <!-- Imagem-->
            <div class="mt-4">
                <label for="image" class="block font-medium text-sm text-gray-700">Imagem</label>
        
                <input class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-700 focus:outline-none dark:bg-gray-100 dark:border-gray-600 dark:placeholder-gray-400" id="image" type="file" name="image">
            </div> 
        
            <button type="submit" class="ml-4 mt-4 inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-orange-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150"> Criar <button>
        
        </form>
    </div>
</div>

@endsection