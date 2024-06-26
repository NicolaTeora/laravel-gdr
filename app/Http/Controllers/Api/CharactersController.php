<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Character;
use Illuminate\Http\Request;

//
class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::select('id', 'name', 'description', 'attack', 'defence', 'speed', 'intelligence', 'life', 'type_id')->with(['type'])->get();
        // ->with(['types', 'items'])->get();
        foreach ($characters as $character) {
            $character->image = asset('/storage/' . $character->type->Image);
        }
        return response()->json($characters);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $character = Character::select('id', 'name', 'description', 'attack', 'defence', 'speed', 'intelligence', 'life', 'type_id')->with(['type'])
            ->where('id', $id)->first();

        $character->image = asset('/storage' . $character->type->Image);
        return response()->json($character);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
