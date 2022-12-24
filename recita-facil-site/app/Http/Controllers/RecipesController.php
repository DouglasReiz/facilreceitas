<?php

namespace App\Http\Controllers;

use App\Models\Recipes;
use App\Http\Requests\StoreRecipesRequest;
use App\Http\Requests\UpdateRecipesRequest;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(Recipes $recipes)
    {
        $this->model = $recipes;
    }
    
    public function index()
    {
        $recipes = Recipes::all();

        return view('recipes.index', compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRecipesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecipesRequest $request)
    {
        $data = $request->all();
        $file = $request['image'];
        $path = $file->store('recipes', 'public');
        $data['image'] = $path;

        $this->model->create($data);

        return redirect()->route('recipes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function show(Recipes $recipes, $id)
    {
        if(!$recipes = $this->model->find($id))
            return redirect()->back();

        return view('recipes.show', compact('recipes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipes $recipes, $id)
    {
        if (!$recipes = $this->model->find($id))
            return redirect()->back();

        return view('recipes.edit', compact('recipes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRecipesRequest  $request
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecipesRequest $request, $id)
    {
        if (!$recipes = $this->model->find($id))
            return redirect()->back();

            $data = $request->all();
            if ($request->image){
                $file = $request['image'];
                $path = $file->store('recipes', 'public');
                $data['image'] = $path;
            }
            
            $recipes->update($data);

            return redirect()->route('recipes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipes  $recipes
     * @return \Illuminate\Http\Response
     */
    public function delete(Recipes $recipes, $id)
    {
        if (!$recipes = $this->model->find($id))
            return redirect()->back();

        $recipes->delete();

        return redirect()->route('recipes.index');
    }
}
