<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models/Owner;
class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owner = Owner::all();
        return view('owners.index', ['owners' => $owner]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('owners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Owner::create($request->all());

        return redirect()->route('owners.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $owner = Owner::find($id);
        return view('owners.show', ['owners' => $owner]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $owner = Owner::find($id);
        return view('owners.edit', ['owners' => $owner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $owner = Owner::find($id);
        $owner->update($request->all());
        return redirect()->route('owners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $owner = Owner::find($id);
        $owner->delete();
        return redirect()->route('owners.index');
    }
    }

