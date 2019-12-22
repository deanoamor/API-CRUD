<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Crud;
class CrudController extends Controller
{
    //

    public function index(){
        $crud=Crud::all();

        $data=['crud'=>$crud];

        return $data;
    }

    public function create(request $request){
        $crud=new Crud();
        $crud->hari=$request->hari;
        $crud->kegiatan=$request->kegiatan;
        $crud->waktu=$request->waktu;
        $crud->save();

        return "data tersimpan";
    }

    public function update(request $request, $id){
        $crud=Crud::find($id);
        $crud->hari=$request->hari;
        $crud->kegiatan=$request->kegiatan;
        $crud->waktu=$request->waktu;
        $crud->save();

        return "data  terupdate";
    }

    public function delete($id){
        $crud=Crud::find($id);
        $crud->delete();

        return "data terhapus";
    }

    public function detail($id){
        $crud=Crud::find($id);

        return $crud;
    }
}
