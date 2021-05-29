<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class guruController extends Controller
{
    //
    public function index(){
        $dataguru = DB::table('tbl_jadwal')
        -> join('data_guru','tbl_jadwal.id_guru','=','data_guru.id_guru')
        -> join('setup_pelajaran','tbl_jadwal.id_pelajaran','=','setup_pelajaran.id_pelajaran')
        -> join('setup_kelas','tbl_jadwal.id_kelas','=','setup_kelas.id_kelas')
        -> select('nama_guru','nama_kelas','nama_pelajaran')
        -> get();
        return view('select_join_dataguru_0183', ['dataguru' => $dataguru]);
    }
}
