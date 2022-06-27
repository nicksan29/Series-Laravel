<?php

namespace App\Http\Controllers;

use App\Models\Seri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SerieController extends Controller
{
    public function index() {
        $seri= Seri::all();

        return view("seri-index",[
            "seri" => $seri
        ]);
    }

    public function create() {
        return view("seri-create");
    }
    public function store(Request $request) {
        if ($request->hasFile('image') && $request->file('image')->isValid()){
            $image = $request->image;
            $ext = $image->extension();
            $imagename = str_replace(' ', '_',pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)) . strtotime("now") . "." . $ext;
            $image->storeAs("series", $imagename);
        }

        $seri= Seri::create([
            "name" => $request->name,
            "seasons" => $request->seasons,
            "gen" => $request->gen,
            "image" => $imagename,
            "bio" => $request->bio,
        ]);
        return redirect(route("seri.index"))->withSuccess("série salva");
    }

    public function edit($id){
        $seri=  Seri::where ("id", $id)->first();
        return view("seri-edit",[
            "seri"=> $seri
        ]);
    }

    public function update(Request $request){
        $request->validate([
            "id" => "string|required",
            "name" => "string|required",
            "seasons" => "string|required",
            "gen" => "string|required",
            "image" => "file|required",
            "bio" => "string|nullable",
        ]);
        $seri= Seri::where("id", $request->id)->first();
        $request->image->storeAs("series",$seri->image);
        $seri->update([
            "name" => $request->name,
            "seasons" => $request->seasons,
            "gen" => $request->gen,
            "image" => $seri->image,
            "bio" => $seri->bio,
        ]);
        return redirect(route("seri.index"))->withSuccess("serie editada");
    }
    public function delete($id){
        $seri = Seri::where("id", $id)->first();
        $seri->delete();
        return back()->withsuccess("Serie apagada");
    }
    public function bio($id){
        $seri=  Seri::where ("id", $id)->first();
        return view("seri-bio",[
            "seri"=> $seri
        ]);
    }
    // public function bio(){
    //     return view("seri-bio",[
    //     ]);
    // }
}
