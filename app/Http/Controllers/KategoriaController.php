<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategoriak;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index()
    {
        $reg = Kategoriak::all();
        return $reg;
    }
    public function store(Request $request)
    {
        $store = new Kategoriak; 
        $store->szoveg = $request->szoveg;
    }
    public function delete($id)
    {
        Kategoriak::find($id)->delete();
    }
}
