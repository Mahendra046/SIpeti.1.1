<?php

namespace App\Http\Controllers\Pegawai\Pengajuan;

use App\Models\Pegawai\Pengajuan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CutiHamilController extends Controller
{
    function index()
    {
        $data['list_pengajuan'] = Pengajuan::where('jenis_cuti', 'Cuti Hamil')->get();
        return view('pegawai.pengajuan.cuti_hamil.index', $data);
    }

    function create()
    {
        return view('pegawai.pengajuan.cuti_hamil.create');
    }

    function store()
    {
        $pengajuan = new Pengajuan;
        $pengajuan->id_pegawai = request()->user()->id;
        $pengajuan->jenis_cuti = 'Cuti Hamil';
        $pengajuan->keterangan = request('keterangan');
        $pengajuan->tanggal_surat = Carbon::now()->format('Y-m-d');
        $pengajuan->dari_tanggal = request('dari_tanggal');
        $pengajuan->sampai_tanggal = request('sampai_tanggal');
        $pengajuan->berapa_lama = request('berapa_lama');
        $pengajuan->alamat_selama_cuti = request('alamat_selama_cuti');
        $pengajuan->save();
        return redirect('pegawai/pengajuan/cuti-hamil')->with('success', 'Data Berhasil DiUpload');
    }

    function show($pengajuan)
    {
        $pengajuan = Pengajuan::with('Pegawai')
                                ->where('id_pegawai',auth()->user()->id)
                                ->find($pengajuan);
        return $pengajuan;
    }
    function edit(Pengajuan $cutihamil)
    {
        $data['cutiHamil'] = $cutihamil;
        return view('pegawai.pengajuan.cuti_hamil.edit', $data);
    }

    function update(Pengajuan $cutihamil)
    {

        $cutihamil->id_pegawai = request()->user()->id;
        $cutihamil->jenis_cuti = 'Cuti Sakit';
        $cutihamil->keterangan = request('keterangan');
        $cutihamil->tanggal_surat = Carbon::now()->format('Y-m-d');
        $cutihamil->dari_tanggal = request('dari_tanggal');
        $cutihamil->sampai_tanggal = request('sampai_tanggal');
        $cutihamil->berapa_lama = request('berapa_lama');
        $cutihamil->alamat_selama_cuti = request('alamat_selama_cuti');
        return redirect('cutihamil')->with('succes', 'Data Berhasil Diedit');
    }

    function destroy(Pengajuan $cutihamil)
    {
        $cutihamil->delete();
        return redirect('cutihamil')->with('danger', 'Data Berhasil DiHapus');
    }
}
