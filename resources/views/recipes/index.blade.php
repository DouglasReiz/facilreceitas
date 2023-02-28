@extends('template.index')
@section('title', 'Receitas')
@section('body')


<div class="aling-center ">
    <div class="text-orange-600 text-5xl pb-4 text-center">
        <h1>Receitas</h1>
    </div>
    <div class="flex justify-center mt-8 mx-48 gap-10 flex-wrap">
        @foreach($recipes as $recipe)
        
        <div class="container max-w-sm bg-white rounded-lg shadow-lg px-20">
            <a class="flex justify-center" href=" {{ route('recipes.show', $recipe->id) }} ">
                <img width="600" height="" class="p-8 rounded-t-lg h-200 w-auto" src="{{ asset('storage/'.$recipe->image) }}" alt="recipe image" />
            </a>
            <div class="px-5 pb-5">
                <a href="{{ route('recipes.show', $recipe->id) }}">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 ">{{ $recipe->name }}</h5>
                </a>
                
                <div class="flex justify-between items-center">
                    <span class="text-3xl font-bold text-gray-900">{{ $recipe->difficulty }}</span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection