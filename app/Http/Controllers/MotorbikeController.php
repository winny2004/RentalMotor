<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Motorbike;
use App\Models\Color;
use App\Models\Owner;
class MotorbikeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            $color = Color::all();
            $owner = Owner::all();
            $motorbike = Motorbike::all();
            return view('motorbikes.index', ['motorbikes' => $motorbike, 'colors' => $color, 'owners' =>$owner]);
      
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $color = Color::all();
        $owner = Owner::all();
        $brand = Brand::all();
        return view('motorbikes.create', ['brands' => $brand, 'colors' => $color, 'owners' =>$owner]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $motorbike = new Motorbike;
        $motorbike->brand_id=$request->brand_id;
        $motorbike->owner_id=$request->owner_id;
        $motorbike->year=$request->year;
        $motorbike->plate=$request->plate;
        $motorbike->save();
        $motorbike->motorbikes()->attach($request->motorbikes);
        return redirect()->route('motorbikes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $motorbike = Motorbike::find($id);
        return view('motorbikes.show',['motorbikes' => $motorbike]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $color = Color::all();
        $owner = Owner::all();
        $motorbike = Motorbike::find($id);
        return view('motorbikes.edit',['motorbikes' => $motorbike, 'colors' => $color, 'owners' =>$owner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $motorbike = Motorbike::find($id);
        $motorbike->update($request->all());
        return redirect()->route('motorbikes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
            $motorbike = Motorbike::find($id);
        $motorbike->delete();
        return redirect()->route('motorbikes.index');
    }
}
