<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Chef;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $recipe = Recipe::get();
        return view('recipe.list', compact('recipe'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $recipe = Recipe::get();
        $chef = Chef::all();
        return view('recipe.create', compact('recipe','chef'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'food_name' => 'required',
            'description' => 'required',
            'proce_dure' => 'required',
            'chef_id' => 'required'
        ]);

        $recipe = new Recipe([
            'food_name' => $request->get('food_name'),
            'description' => $request->get('description'),
            'proce_dure' => $request->get('proce_dure'),
            'chef_id' => $request->get('chef_id'),
        ]);
        $recipe->save();
        return redirect('/recipe')->with('success', "Recipe $recipe->food_name has been added");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $recipe = Recipe::find($id);
        $chef = $recipe->chef;
        return view('recipe.show', compact('recipe','chef'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Recipe $recipe)
    {
        //
        return view('recipe.edit', compact('recipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'food_name' => 'required',
            'description' => 'required',
            'proce_dure' => 'required',
            'chef_id' => 'required'
        ]);
        $recipe = Recipe::find($id);
        $recipe->food_name = $request->get('food_name');
        $recipe->description = $request->get('description');
        $recipe->proce_dure = $request->get('proce_dure');
        $recipe->chef_if = $request->get('chef_id');
        $recipe->update();
        return redirect('/recipe')->with('success', "chef $recipe->food_name has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recipe  $recipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recipe $recipe)
    {
        //
        $recipe->delete();
        return redirect('/chef')->with('success', "$recipe->food_name has been removed");;
    }
}
