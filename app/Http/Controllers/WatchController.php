<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watch;
use App\Http\Requests\WatchRequest;

class WatchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $watches = Watch::query();

        // Verifica si se ha enviado una columna de búsqueda y un valor
        if ($request->has('column') && $request->has('search')) {
            $column = $request->input('column');
            $search = $request->input('search');
            $watches->where($column, 'like', '%' . $search . '%');
        }

        $watches = $watches->get();

        return view('watches.index', compact('watches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('watches.create',[
        
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WatchRequest $request)
    {
        Watch::create($request->all());

        
       

        return redirect('/watches');
    }

    /**
     * Display the specified resource.
     */
    public function show (Watch $watch)   
    {
        //var_dump($computer);die;      
        return view('watches.show', [
            'watch' => $watch,
            
        ]);

        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Watch $watch)
    {
        //$computer = computer::findOrFail($id);
        //var_dump($computer);die;
        return view('watches.edit', [
            'watch' => $watch,
            
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WatchRequest $request, Watch $watch)
    {
        $watch->update($request->all());

        return redirect('/watches');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Watch $watch)
    
    {
        $watch->delete();
        return redirect('/watches');
    }   
    
}
