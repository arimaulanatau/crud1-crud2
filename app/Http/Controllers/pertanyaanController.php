<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;
use App\Models\JawabanModel;

class pertanyaanController extends Controller
{
    public function create(){

        return view('crud.form');


    }

    public function point(Request $request){
        $new_pertanyaan = PertanyaanModel::save($request->all());

        return redirect('/pertanyaan');
    }

    public function index(){
        $pertanyaan = PertanyaanModel::get_all();

        return view('crud.index', compact('pertanyaan'));
    }

    public function show($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        $jawaban = jawabanModel::find_by_pertanyaan_id($id);
        return view('crud.detail_jawaban', compact('pertanyaan','jawaban'));
    }

    public function edit($id){
        $pertanyaan = PertanyaanModel::find_by_id($id);
        return view('crud.edit_pertanyaan', compact('pertanyaan','id'));
    }

    public function update(Request $request){
        $data =$request->all();
        unset($data['_token']);
        unset($data['_method']);
        $pertanyaan = PertanyaanModel::update($data);
        return redirect('/pertanyaan');        
         
    }

    public function delete($id){
        PertanyaanModel::delete($id);
        return redirect('/pertanyaan');
    }

}
