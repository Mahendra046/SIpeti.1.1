<?php

namespace App\Http\Controllers\Pegawai\Pengajuan;

use App\Models\Pegawai\Pengajuan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CutiSakitController extends Controller
{
    function index() {
        $data['list_pengajuan'] = Pengajuan::where('jenis_cuti','Cuti Sakit')
                                            ->where('id_pegawai', request()->user()->id)->get();
                                            // return $data;
        return view('pegawai.pengajuan.cuti_sakit.index',$data);
    }

    function create() {
        return view('pegawai.pengajuan.cuti_sakit.create');
    }

    function store() {
        $pengajuan = New Pengajuan;
        $pengajuan->id_pegawai = request()->user()->id;
        $pengajuan->jenis_cuti = 'Cuti Sakit';
        $pengajuan->status_pengajuan = 'Diproses';
        $pengajuan->keterangan = request('keterangan');
        $pengajuan->tanggal_surat = Carbon::now()->format('Y-m-d');
        $pengajuan->dari_tanggal = request('dari_tanggal');
        $pengajuan->sampai_tanggal = request('sampai_tanggal');
        $pengajuan->berapa_lama = request('berapa_lama');
        $pengajuan->alamat_selama_cuti = request('alamat_selama_cuti');
        $pengajuan->save();
        return redirect('pegawai/pengajuan/cuti-sakit')->with('success', 'Data Berhasil DiUpload');
    }

    function show($pengajuan)
    {
        $pengajuan = Pengajuan::with('Pegawai')
                                ->where('id_pegawai',auth()->user()->id)
                                ->find($pengajuan);
        return $pengajuan;
    }
    function edit($pengajuan) {
        $data ['pengajuan'] = Pengajuan::find($pengajuan);
        return view('pegawai.pengajuan.cuti_sakit.edit', $data);

    }

    function update($pengajuan) {
    $pengajuan = Pengajuan::find($pengajuan);
    $pengajuan->id_pegawai = request()->user()->id;
    $pengajuan->jenis_cuti = 'Cuti Sakit';
    $pengajuan->keterangan = request('keterangan');
    $pengajuan->tanggal_surat = Carbon::now()->format('Y-m-d');
    $pengajuan->dari_tanggal = request('dari_tanggal');
    $pengajuan->sampai_tanggal = request('sampai_tanggal');
    $pengajuan->berapa_lama = request('berapa_lama');
    $pengajuan->alamat_selama_cuti = request('alamat_selama_cuti');
    $pengajuan->update();
    // return $pengajuan;
    return redirect('pegawai/pengajuan/cuti-sakit')->with('succes', 'Data Berhasil Diedit');


    }

    function destroy(Pengajuan $pengajuan) {
        $pengajuan->delete();
        return redirect('pegawai/pengajuan/cuti-sakit')->with('danger','Data Berhasil DiHapus');
    }
}
