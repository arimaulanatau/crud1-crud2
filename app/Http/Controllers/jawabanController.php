<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Models\jawabanModel;

class jawabanController extends Controller
{
    public function point($pertanyaan_id, Request $request){
        $data = $request->all();
        unset($data['_token']);
        jawabanModel::save($data);
        return redirect('/pertanyaan');
    }

    public function index($pertanyaan_id){
        $jawaban = jawabanModel::find_by_pertanyaan_id($pertanyaan_id);
        return view('crud.jawaban', compact('jawaban'));

    }
}
