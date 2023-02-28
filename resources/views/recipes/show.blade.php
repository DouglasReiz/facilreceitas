@extends('template.index')
@section('title', 'receita')
@section('body')

<div class="grid mx-64">

    <div class="flex justify-center">
        <div class="bg-gray-100 dark:bg-gray-200 shadow-lg flex justify-center rounded-lg w-full p-4 my-8 text-2xl"><strong> {{ $recipes->name }} </strong></div>
    </div>

    <div class="">
        <div class="bg-gray-100 dark:bg-gray-200 shadow-lg relative rounded-lg w-full">
            <div class="my-2 mx-auto relative max-w-sm">
                <!-- para aparecer as imagens com links oficiais adicione 'storage/'. dentro de assets-->
                <img class="h-22 w-auto pt-5" src="{{ asset('storage/'.$recipes->image) }}" >

            </div>
            <div class="my-6 justify-center mx-6 py-4">
                <h4 class="font-bold text-lg my-2 ">Nome: <span class="font-medium">{{ $recipes->name }}</span></h4>
                <h4 class="font-bold text-lg my-2">ingredientes: <span class="font-medium">{{ $recipes->ingredients }}</span></h4>
                <h4 class="font-bold text-lg my-2 ">Modo de preparo: <span class="font-medium">{{ $recipes->preparation }}</span></h4>
                <h4 class="font-bold text-lg my-2 "><span class="font-medium">{{ $recipes->preparation_second }}</span></h4>
                <h4 class="font-bold text-lg my-2">tempo de preparo: <span class="font-medium">{{ $recipes->preparation_time }}</span></h4>
                <h4 class="font-bold text-lg my-2">Porções: <span class="font-medium">{{ $recipes->portions }}</span></h4>
            </div>

        </div>
    </div>

    @Auth
    @if (Auth::user()->isAdmin)
    <div class="bg-white shadow-lg relative flex justify-center rounded-lg w-full my-8">
        <div class="flex mx-auto my-2">
            <a href="{{ route('recipes.edit', $recipes->id) }}" class="btn-alert mr-96">
                Editar
            </a>
            <form action="{{ route('recipes.delete', $recipes->id) }}" method="POST" class="inline">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn-danger">
                    Deletar
                </button>
            </form>
        </div>
        <div class="border-2-2 absolute h-full border border-gray-700 border-opacity-20"></div>
    </div>
    @endif
    @endauth


</div>
@endsection