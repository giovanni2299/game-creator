<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $weapons = Weapon::all();


        return view('weapons.index', compact('weapons'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('weapons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        
        $data_weapon = $request->all();
        // dd($data_weapon);
        
        $new_weapon = Weapon::create($data_weapon);

        return to_route('weapons.show', $new_weapon);
    }

    /**
     * Display the specified resource.
     */
    public function show(Weapon $weapon)
    {
        return view('weapons.show', compact('weapon'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Weapon $weapon)
    {
        //
        return view('weapons.edit', compact('weapon'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Weapon $weapon)
    {
        //
        $form_data = $request->all();
       
        $weapon->fill($form_data); 
        
        $weapon->save();
        
        return to_route('weapons.show', $weapon);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Weapon $weapon)
    {
        //
        $weapon->delete();

        return to_route('weapons.index');
    }
}
