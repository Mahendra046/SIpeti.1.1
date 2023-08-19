<?php

namespace App\Http\Controllers\Pegawai\Pengajuan;

use App\Models\Pegawai\Pengajuan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CutiAlasanPentingController extends Controller
{
    function index() {
        $data['list_pengajuan'] = Pengajuan::where('jenis_cuti','Alasan Penting')->get();
        return view('pegawai.pengajuan.cuti_alasanpenting.index',$data);
    }

    function create() {
        return view('pegawai.pengajuan.cuti_alasanpenting.create');
    }
  function store(){
    $cutialasanpenting = New Pengajuan;
    $cutialasanpenting->id_pegawai = request()->user()->id;
    $cutialasanpenting->jenis_cuti = 'Alasan Penting';
    $cutialasanpenting->keterangan = request('keterangan');
    $cutialasanpenting->tanggal_surat = Carbon::now()->format('Y-m-d');
    $cutialasanpenting->dari_tanggal = request('dari_tanggal');
    $cutialasanpenting->sampai_tanggal = request('sampai_tanggal');
    $cutialasanpenting->berapa_lama = request('berapa_lama');
    $cutialasanpenting->alamat_selama_cuti = request('alamat_selama_cuti');
    $cutialasanpenting->save();
    return redirect('pegawai/pengajuan/cuti-alasanpenting')->with('success', 'Data Berhasil DiUpload');
  }

  function show() {

  }
  function edit() {

  }

  function update() {

  }

  function destroy() {

  }
}
