<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class student extends Controller
{

    public function show(){
        $std=DB::select("select * from students");
        return view('show',['std'=>$std]);
    }
    public function create(){
    return view('data');

    }

    public function savedata(Request $req){
        $name= $req->input('stdname');
        $address= $req->input('stdadd');
        $email= $req->input('stdemail');

        DB::insert("insert into students(name,address,email) values('$name','$address','$email')");

        $std=DB::select("select * from students");
        return view('show',['std'=>$std]);

    }

    public function edit($Id){
        $std=DB::select('select * from students where id ='. $Id);
        return view('edit',['std'=>$std]);
    }

    public function update(Request $req, $Id){
        $name= $req->input('stdname');
        $address= $req->input('stdadd');
        $email= $req->input('stdemail');

        DB::update("update students set name = '$name', address = '$address', email = '$email' where id = ".$Id);

        $std=DB::select("select * from students");
        return view('show',['std'=>$std]);

    }
    public function delete($Id){
    DB::delete('delete from students where id ='.$Id);
    $std=DB::select('select * from students ');
    return view('show',['std'=>$std]);
    
    }
}
