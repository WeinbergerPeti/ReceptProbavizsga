<?php

namespace App\Http\Controllers;

use App\Models\Kategoriak;
use Illuminate\Http\Request;

class KategoriakController extends Controller
{
    public function index()
    {
        $kategoriak=Kategoriak::all();
        return $kategoriak;
    }

    public function show($id)
    {
        $kategoria = Kategoriak::find($id);
        return $kategoria;
    }

    public function store(Request $request)
    {
        $kategoria= new Kategoriak();
        $kategoria->nev = $request->nev;
        $kategoria->save();
    }

    public function update(Request $request)
    {
        $kategoria= new Kategoriak();
        $kategoria->nev = $request->nev;
        $kategoria->save();
    }

    public function destroy($id)
    {
        Kategoriak::find($id)->delete();
    }
}
