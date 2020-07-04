<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class jawabanModel{

    public static function get_all(){

        $jawaban = DB::table('jawaban')->get();
        return $jawaban;

    }

    public static function save($data){
        // buang token
        unset($data['_token']);
        $new_jawaban = DB::table('jawaban')->insert($data);
        return $new_jawaban;

    }

    public static function find_by_pertanyaan_id($id_pertanyaan){
        $pertanyaan = DB::table('jawaban')->where('pertanyaan_id', $id_pertanyaan)->get();
        return $pertanyaan;
    }

}

?>
