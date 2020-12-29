<?php

namespace App\Http\Controllers;

use App\Models\college;
use Illuminate\Http\Request;
use DB;

class CollegeController extends Controller
{
    public function homePage(Request $req){
        return view("home",["data" => College::all()]);
    }
 
    public function insertPage(Request $req){
        return view("insert");
    }

    //insert
    public function insertData(Request $req){
        $req->validate([
            'title'=>'required',
            'type'=>'required',
            'est_year'=>'required',
            'city'=>'required',
            'state'=>'required',
            'logo'=>'required|mimes:jpg,png',
        ]);

        $filename = time(). "." .$req->logo->extension();
        
        $req->logo->move(public_path('images'),$filename);

        College::create([
            'title'=>$req->title,
            'type'=>$req->type,
            'est_year'=>$req->est_year,
            'city'=>$req->city,
            'state'=>$req->state,
            'logo'=>$filename,
        ]);
        return redirect()->back();
    }

    //delete
    public function delete($id){
        College::find($id)->delete();
        return redirect()->back();
    }

    //edit
    public function edit($edit_id){
        $data['record'] = College::find($edit_id);
        return view('edit',$data);
    }

    //update
    public function update(Request $req,$id){
        $req->validate([
            'title'=>'required',
            'type'=>'required',
            'est_year'=>'required',
            'city'=>'required',
            'state'=>'required',
        ]);

        College::find($id)->update([
            'title'=>$req->title,
            'type'=>$req->type,
            'est_year'=>$req->est_year,
            'city'=>$req->city,
            'state'=>$req->state,
        ]);
        return redirect()->back();
    }



}
