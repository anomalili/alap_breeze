<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Ingatlanok;
use DB;
use Illuminate\Http\Request;

class IngatlanController extends Controller
{
    public function index()
    {
        $reg = Ingatlanok::all();
        return $reg;
    }
    public function store(Request $request)
    {
        $store = new Ingatlanok;
        $store->kategoria = $request->kategoria;
        $store->leiras = $request->leiras;
        $store->hirdetesDatuma = $request->hirdetesDatuma;
        $store->tehermentes = $request->tehermentes;
        $store->ar = $request->ar;
        $store->kepUrl = $request->kepUrl;

    }
    public function destroy($id)
    {
        Ingatlanok::find($id)->delete();
    }
    public function ingatlanKat()
    {
        $ingatlanok = DB::table('ingatlanoks')
            ->join('kategoriaks', 'ingatlanoks.id', '=', 'kategoriaks.id')
            ->select('ingatlanoks.*', 'kategoriaks.szoveg')
            ->get();
    }
}
