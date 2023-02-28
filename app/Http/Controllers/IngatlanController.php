<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ingatlanok;
use Illuminate\Http\Request;

class IngatlanController extends Controller
{
    public function mutasdMindet()
    {
        $reg = Ingatlanok::all();
        return $reg;
    }
    public function ujIngatlan(Request $request)
    {
        $store = new Ingatlanok; 
        $store->kategoria = $request->kategoria;
        $store->leiras = $request->leiras;
        $store->hirdetesDatuma = $request->hirdetesDatuma;
        $store->tehermentes = $request->tehermentes;
        $store->ar = $request->ar;
        $store->kepUrl = $request->kepUrl;

    }
    public function ingatlanTorlese($id)
    {
        Ingatlanok::find($id)->delete();
    }
}
