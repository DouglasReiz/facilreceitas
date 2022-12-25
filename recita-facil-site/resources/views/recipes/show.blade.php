@extends('template.index')
@section('title', 'receita')
@section('body')

<div class="grid mx-64">

    <div class="flex justify-center">
        <div class="bg-white shadow-lg flex justify-center rounded-lg w-full p-4 my-8 text-2xl"><strong> {{ $recipes->name }} </strong></div>
    </div>

    <div class="">
        <div class="bg-white shadow-lg relative rounded-lg w-full">
            <div class="my-2 mx-auto relative max-w-sm">
                <img class="h-22 w-auto pt-5" src="{{ asset('storage/'.$recipes->image) }}" >

            </div>
            <div class="my-6 justify-center mx-6 py-4">
                <h4 class="font-bold text-lg my-2 ">Nome: <span class="font-medium">{{ $recipes->name }}</span></h4>
                <h4 class="font-bold text-lg my-2">ingredientes: <span class="font-medium">{{ $recipes->ingredients }}</span></h4>
                <h4 class="font-bold text-lg my-2 ">Modo de preparo: <span class="font-medium">{{ $recipes->preparation }}</span></h4>
                <h4 class="font-bold text-lg my-2">tempo de preparo: <span class="font-medium">{{ $recipes->preparation_time }}</span></h4>
                <h4 class="font-bold text-lg my-2">Porções: <span class="font-medium">{{ $recipes->portions }}</span></h4>
            </div>

        </div>
    </div>

    
</div>
@endsection