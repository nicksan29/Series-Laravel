<?php

namespace app\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Seri;
use illuminate\Http\Request;

Class SeriController extends Controller
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
        dd(explode("&",$request->getContent()));
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