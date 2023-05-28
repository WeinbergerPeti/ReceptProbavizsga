<?php

namespace App\Http\Controllers;

use App\Models\Receptek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReceptekController extends Controller
{
    public function index()
    {
        $receptek=DB::table('receptek as r')
        ->select('k.nev as kategoria_nev', 'r.*')
        ->join('kategoriak as k', 'r.kat_id', 'k.id')
        ->get();
        return $receptek;
    }

    public function show($id)
    {
        $recept = Receptek::find($id);
        return $recept;
    }

    public function store(Request $request)
    {
        $recept= new Receptek();
        $recept->nev = $request->nev;
        $recept->kat_id = $request->kat_id;
        $recept->kep_eleresi_ut = $request->kep_eleresi_ut;
        $recept->leiras = $request->leiras;
        $recept->save();
    }

    public function update(Request $request)
    {
        $recept= new Receptek();
        $recept->nev = $request->nev;
        $recept->kat_id = $request->kat_id;
        $recept->kep_eleresi_ut = $request->kep_eleresi_ut;
        $recept->leiras = $request->leiras;
        $recept->save();
    }

    public function destroy($id)
    {
        Receptek::find($id)->delete();
    }
}
