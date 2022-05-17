<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(){
        $seri= Seri::all();

        return view("seri-index",[
            "seri" => $seri
        ]);
    }

    public function create(){
        return view("seri-create");
    }

    public function store(Request $request){
        dd($request->all());
        $request->validate([
            "name" => "string|required",
            "seasons" => "string|required",
            "gen" => "string|required",
        ]);
        
        $seri= Seri::create([
            "name" => $request->name,
            "seasons" => $request->seasons,
            "gen" => $request->gen,
        ]);
        return redirect(route("seri.index"))->withSuccess("série salva");
    }
}
