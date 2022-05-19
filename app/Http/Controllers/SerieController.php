<?php

namespace App\Http\Controllers;

use App\Models\Seri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        if ($request->hasFile('image') && $request->file('image')->isValid()){
            $image=$request->image;
            $ext=$image->extension();
            $imagename=$image->getClientOriginalName() . strtotime("now") . "." . $ext;
///           $image->storeAs("series", $imagename);
            Storage::disk("public")->put("series/" . $imagename, $image);
        }
        
        $seri= Seri::create([
            "name" => $request->name,
            "seasons" => $request->seasons,
            "gen" => $request->gen,
            "image" => $imagename,
        ]);
        return redirect(route("seri.index"))->withSuccess("série salva");
    }
}
