<?php

namespace App\Http\Controllers;
use App\Models\Recipe;
use App\Models\Chef;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        Paginator::useBootstrap();
        $chefs = Chef::paginate(3);
        return view('chef.list', compact('chefs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('chef.create');
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
            'name' => 'required',
            'speciality' => 'required',
            'age' => 'required',
            'country' => 'required'
        ]);

        $chef = new Chef([
            'name' => $request->get('name'),
            'speciality' => $request->get('speciality'),
            'age' => $request->get('age'),
            'country' => $request->get('country'),
        ]);
        $chef->save();
        return redirect('/chef')->with('success', 'Chef has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show(Chef $chef)
    {
        //
        return view('chef.show', compact('chef'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function edit(Chef $chef)
    {
        //
        return view('chef.edit', compact('chef'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'speciality' => 'required',
            'age' => 'required',
            'country' => 'required'
        ]);

        $chef = Chef::find($id);
        $chef->name = $request->get('name');
        $chef->speciality = $request->get('speciality');
        $chef->age = $request->get('age');
        $chef->country = $request->get('country');
        $chef->update();
        return redirect('/chef')->with('success', "chef $chef->name has been updated");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chef $chef)
    {
        //
        $chef->delete();
        return redirect('/chef')->with('success', "chef $chef->name has been sent to a long holiday");;
    }

    public function rec($id){
        $chef = Chef::find($id);
        $recipes = $chef->recipe;
        return view('chef.recipe', compact('recipes','chef'));
        }
}
