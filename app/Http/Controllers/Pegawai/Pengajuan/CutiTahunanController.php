<?php

namespace App\Http\Controllers\Pegawai\Pengajuan;

use App\Models\Pegawai\Pengajuan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CutiTahunanController extends Controller
{
    function index(){
        $data['list_pengajuan'] = Pengajuan::where('jenis_cuti','Cuti Tahunan')->get();
        return view('pegawai.pengajuan.cuti_tahunan.index',$data);
    }

    function create() {
        return view('pegawai.pengajuan.cuti_tahunan.create');
    }

  function store(){
    $cutitahunan = New Pengajuan;
    $cutitahunan->id_pegawai = request()->user()->id;
    $cutitahunan->jenis_cuti = 'Cuti Tahunan';
    $cutitahunan->keterangan = request('keterangan');
    $cutitahunan->tanggal_surat = Carbon::now()->format('Y-m-d');
    $cutitahunan->dari_tanggal = request('dari_tanggal');
    $cutitahunan->sampai_tanggal = request('sampai_tanggal');
    $cutitahunan->berapa_lama = request('berapa_lama');
    $cutitahunan->alamat_selama_cuti = request('alamat_selama_cuti');
    $cutitahunan->save();
    return redirect('pegawai/pengajuan/cuti-tahunan')->with('success', 'Data Berhasil DiUpload');
  }

  function show() {

  }
  function edit(Pengajuan $cutitahunan) {
    $data['cutitahunan'] = $cutitahunan;
    return view( 'pegawai.pengajuan.cuti_tahunan.edit', $data);

  }

  function update(Pengajuan $cutitahunan) {

    $cutitahunan->id_pegawai = request()->user()->id;
    $cutitahunan->jenis_cuti = 'Cuti Sakit';
    $cutitahunan->keterangan = request('keterangan');
    $cutitahunan->tanggal_surat = Carbon::now()->format('Y-m-d');
    $cutitahunan->dari_tanggal = request('dari_tanggal');
    $cutitahunan->sampai_tanggal = request('sampai_tanggal');
    $cutitahunan->berapa_lama = request('berapa_lama');
    $cutitahunan->alamat_selama_cuti = request('alamat_selama_cuti');
    return redirect('cutitahunan')->with('succes', 'Data Berhasil Diedit');

  }

  function destroy(Pengajuan $cutitahunan) {
    $cutitahunan->delete();
    return redirect('cutitahunan')->with('danger','Data Berhasil DiHapus');

  }

}
