<?php

namespace App\Http\Controllers;

use App\Models\Esport;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class EsportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Esport::query();

        $allowedFilters= [
            'game_title',
            'team_name'
        ];
        foreach($allowedFilters as $field){
            if ($request->query($field)){
                $query->where($field,$request->query($field));
            }
        }

        return $query->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'game_title' => 'required|string|max:255',
            'team_name' => 'required|string|max:255',
            'roster' => 'required|string|max:255',
            'wins' => 'required|integer|min:0|max:30',         
        ]);
        return Response()->json(Esport::create($data), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Esport $esport)
    {
        return Response()->json($esport, 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Esport $esport)
    {
        $data = $request->validate([
            'game_title' => 'required|string|max:255',
            'team_name' => 'required|string|max:255',
            'roster' => 'required|string|max:255',
            'wins' => 'required|integer|min:0|max:30',
        ]);

        $esport->update($data);
        return $esport;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Esport $esport)
    {
        $esport->delete();
        return response()->noContent();
    }
}
