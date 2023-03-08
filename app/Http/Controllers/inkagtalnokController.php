<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ingatlanok;
use DB;
use Symfony\Contracts\Service\Attribute\Required;

class inkagtalnokController extends Controller
{
    public function all() {
        $task = DB::table("ingatlanoks")
        ->select("*")
        ->join("kategoriaks","kategoriaks.id","=","ingatlanoks.id")
        ->get();
        return $task;
        
    }

    public function ujIngatlan(Request $request) {
        $this->validate($request, [
            'kategoria' => 'required',
            'hirdetesDatuma' => 'required',
            'leiras' => 'required',
            'tehermentes' => 'required',
            'kepUrl' => 'nullable'
        ]);
        ingatlanok::create($request->all());
        return back()->with('succes', 'sikeres létrehozás');
    }

    public function store(Request $request) {
        $task = new ingatlanok();
        $task->kategoria = $request->kategoria;
        $task->leiras = $request->leiras;
        $task->hirdetesDatuma = $request->hirdetesDatuma;
        $task->tehermentes = $request->tehermentes;
        $task->kepUrl = $request->kepUrl;
        $task->save();
    }
}
