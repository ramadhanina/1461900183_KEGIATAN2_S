<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datasiswa = DB::table('data_siswa')
            -> select('nis','nama_siswa','kelamin','alamat_siswa')
            -> get();
            return view('select_datasiswa_0183', ['datasiswa' => $datasiswa]);

    }

    public function select_where1(){
        $detailsiswa = DB::table('data_siswa')
        -> select('nama_siswa','alamat_siswa','telpon_siswa')
        -> where('kelamin','=','laki-laki')
        -> get();
        return view('select_where_datasiswa_laki_0183', ['detailsiswa' => $detailsiswa]);
    }

    public function select_where2(){
        $detailsiswa = DB::table('data_siswa')
        -> select('nama_siswa','alamat_siswa','telpon_siswa')
        -> where('kelamin','=','perempuan')
        -> get();
        return view('select_where_datasiswa_perempuan_0183', ['detailsiswa' => $detailsiswa]);
    }

    public function nilai(){
        $nilai= DB::table('tbl_nilai')
        -> join('data_siswa','tbl_nilai.id_siswa','=','data_siswa.id_siswa')
        -> join('setup_pelajaran','tbl_nilai.id_pelajaran','=','setup_pelajaran.id_pelajaran')
        -> join('setup_kelas','tbl_nilai.id_kelas','=','setup_kelas.id_kelas')
        -> select('nama_siswa','alamat_siswa','nama_kelas','nama_pelajaran','nilai')
        -> orderBy('nama_siswa','ASC')
        -> get();
        return view('select_join_like_data_nilai_0183', ['nilai' => $nilai]);
    }

    public function nilailulus(){
        $nilailulus = DB::table('tbl_nilai')
        -> join('data_siswa','tbl_nilai.id_siswa','=','data_siswa.id_siswa')
        -> join('setup_pelajaran','tbl_nilai.id_pelajaran','=','setup_pelajaran.id_pelajaran')
        -> join('setup_kelas','tbl_nilai.id_kelas','=','setup_kelas.id_kelas')
        -> select('nama_siswa','alamat_siswa','nama_kelas','nama_pelajaran','nilai')
        -> where('nilai','>','70')
        -> where('alamat_siswa','like','J%')
        -> orderBy('nama_siswa','ASC')
        -> get();
        return view('select_join_like_nilai_lulus_0183', ['nilailulus' => $nilailulus]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
