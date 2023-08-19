<?php

namespace App\Http\Controllers\Admin\MasterData;

use App\Http\Controllers\Controller;
use App\Models\Admin\MasterData\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $data['list_pegawai'] = Pegawai::all();
        return view('admin.master-data.pegawai.index', $data);
    }

    public function create()
    {
        return view('admin.master-data.pegawai.create');
    }

    public function store()
    {
        $pegawai = New Pegawai;
        $pegawai->nik = Request('nik');
        $pegawai->username = Request('username');
        $pegawai->nama = Request('nama');
        $pegawai->email = Request('email');
        $pegawai->jabatan = Request('jabatan');
        $pegawai->password = Request('password');
        $pegawai->save();
        return redirect('admin/master-data/pegawai');
    }

    public function show(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.show',$data);
    }

    public function edit(Pegawai $pegawai)
    {
        $data['pegawai'] = $pegawai;
        return view('admin.master-data.pegawai.edit',$data);
    }

    public function update(Pegawai $pegawai)
    {
        $pegawai->nik = Request('nik');
        $pegawai->username = Request('username');
        $pegawai->nama = Request('nama');
        $pegawai->email = Request('email');
        if(request('password')) $pegawai->password = Request('password');
        $pegawai->save();
        return redirect('admin/master-data/pegawai');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect('admin/master-data/pegawai');
    }
}
