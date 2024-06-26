<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Character;
use App\Models\Type;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::orderBy('created_at', 'DESC')->paginate(10);
        return view('admin.characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.characters.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $character = new Character();
        $character->fill($data);
        $character->save();
        return redirect()
            ->route('admin.characters.show', $character)
            ->with('message', 'Nuovo personaggio salvato con successo')
            ->with('class', 'alert-success');;
    }

    /**
     * Display the specified resource.
     *
    //  * @param  \App\Models\Character  $character
    //  * @return \Illuminate\Http\Response
     */
    public function show(Character $character)
    {

        return view('admin.characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     *
    //  * @param  \App\Models\Character  $character
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit(Character $character)
    {
        $types = Type::all();

        return view('admin.characters.edit', compact('character', 'types'));
    }

    /**
     * Update the specified resource in storage.
     *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Character  $character
    //  * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Character $character)
    {
        $data = $request->all();

        $character->update($data);
        return redirect()
            ->route('admin.characters.show', compact('character'))
            ->with('message', 'Modifica effettuata con successo')
            ->with('class', 'alert-success');
    }

    /**
     * Remove the specified resource from storage.
     *
    //  * @param  \App\Models\Character  $character
    //  * @return \Illuminate\Http\Response
     */
    public function destroy(Character $character)
    {
        $character->delete();
        return redirect()
            ->route('admin.characters.index')
            ->with('message', 'Personaggio eliminato con successo')
            ->with('class', 'alert-success');
    }
}
