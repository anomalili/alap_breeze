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
    public function formView(Request $request)
    {
        return view('welcome');
    }

    public function form(Request $request) {
        $this->validate($request, [
            'kategoria' => 'required',
            'hirdetesDatuma' => 'required',
            'leiras' => 'required',
            'tehermentes' => 'required',
            'kepUrl' => 'required'
         ]);

        Ingatlanok::create($request->all());
        return back()->with('success', 'Sikeresen tárolva.');
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
