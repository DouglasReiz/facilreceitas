<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeUpdateRecipesRequest;
use App\Models\Recipes;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    private $model;

    public function __construct(Recipes $recipes)
    {
        $this->model = $recipes;
    }
    
    public function index(): Response
    {
        $recipes = Recipes::all();

        return response(view('recipes.index', compact('recipes')));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        return response(view('recipes.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(storeUpdateRecipesRequest $request): RedirectResponse
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
     */
    public function show(string $id): Response
    {
        if(!$recipes = $this->model->find($id))
        return redirect()->back();

        return response(view('recipes.show', compact('recipes')));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        if (!$recipes = $this->model->find($id))
        return redirect()->back();

        return response(view('recipes.edit', compact('recipes')));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(storeUpdateRecipesRequest $request, string $id): RedirectResponse
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
     */
    public function destroy(string $id): RedirectResponse
    {
        if (!$recipes = $this->model->find($id))
        return redirect()->back();

        $recipes->delete();

        return redirect()->route('recipes.index');
    }
}
