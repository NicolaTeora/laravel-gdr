<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type::paginate(12);
        return view('admin.types.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
    //  * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.types.create');
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
        $type = new Type();
        $type->fill($data);
        $type->save();
        return redirect()
            ->route('admin.types.show', $type)
            ->with('message', 'Nuovo personaggio salvato con successo')
            ->with('class', 'alert-success');
        ;
    }

    /**
     * Display the specified resource.
     *
    //  * @param  \App\Models\type  $type
    //  * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {

        return view('admin.types.show', compact('type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
    //  * @param  \App\Models\type  $type
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit(Type $type)
    {
        return view('admin.types.edit', compact('type'));
    }

    /**
     * Update the specified resource in storage.
     *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\type  $type
    //  * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $data = $request->all();
        $type->update($data);
        return redirect()
            ->route('admin.types.show', compact('type'))
            ->with('message', 'Modifica effettuata con successo')
            ->with('class', 'alert-success');
    }

    /**
     * Remove the specified resource from storage.
     *
    //  * @param  \App\Models\type  $type
    //  * @return \Illuminate\Http\Response
     */
    public function destroy(type $type)
    {
        $type->delete();
        return redirect()
            ->route('admin.types.index')
            ->with('message', 'Personaggio eliminato con successo')
            ->with('class', 'alert-success');
    }
}
