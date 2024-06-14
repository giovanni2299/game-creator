<?php

namespace App\Http\Controllers;

use App\Models\Character;
use App\Models\Weapon;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;
use App\Models\Type;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $characters = Character::all();

        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $weapons = Weapon::all();

        return view('characters.create', compact('weapons'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        // $request->validate([
        //     'name'=>'required | max:200',
        //     'attack'=>'required | min:1',
        //     'defence'=>'required | min:1',
        //     'speed'=>'required | min:1',
        //     'life'=>'required | min:1',
        // ]);

        $form_data = $request->validated();

        $new_character = Character::create($form_data);

        if($request->has('weapons')){
            $new_character->weapons()->attach($request->weapons);
        }

        return to_route('characters.show', $new_character);
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        $character->load(['type', 'type.characters']);
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character)
    {

        $weapons = Weapon::orderBy('name', 'asc')->get();

        return view('characters.edit', compact('character', 'weapons'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, Character $character)
    {
        //
        $form_data = $request->all();

        $character->update($form_data);


        if ($request->has('weapons')) {
            $character->weapons()->sync($request->weapons);
        } else {
            // l'utente non ha selezionato niente eliminiamo i collegamenti con i tags
            $character->weapons()->detach();
            // $post->tags()->sync([]); // fa la stessa cosa
        }

        return to_route('characters.index', $character);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character)
    {
        //
        $character->delete();
        return to_route('characters.index');
    }
}
