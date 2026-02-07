<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    
    public function index()
    {
        $evenements = Evenement::with('expert')->latest()->get();
        return view('evenements.index', compact('evenements'));
    }

    
    public function show($id)
    {
        $evenement = Evenement::with(['expert', 'ateliers'])->findOrFail($id);
        return view('evenements.show', compact('evenement'));
    }

   
    public function destroy($id)
    {
        $evenement = Evenement::findOrFail($id);
        $evenement->delete();
        
        return redirect()->route('evenements.index')
                         ->with('success', 'Événement supprimé avec succès.');
    }
}