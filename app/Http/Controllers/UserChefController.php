<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;
use Illuminate\Pagination\Paginator;
class UserChefController extends Controller
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
        return view('Chef.list', compact('chefs'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Chef.create');
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
        return redirect('/userchef')->with('success', 'Chef has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chef  $chef
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $chef = Chef::find($id);
        return view('Chef.show', compact('chef'));
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
        return view('Chef.edit', compact('chef'));
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
        return redirect('/userchef')->with('success', "chef $chef->name has been updated");
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
        return redirect('/userchef')->with('success', "chef $chef->name has been sent to a long holiday");;
    }
    public function rec($id){
        $chef = Chef::find($id);
        $recipes = $chef->recipe;
        return view('Chef.recipe', compact('recipes','chef'));
        echo $id;
        }
}
