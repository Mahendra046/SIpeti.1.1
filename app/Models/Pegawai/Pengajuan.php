<?php

namespace App\Models\Pegawai;

use App\Models\Admin\MasterData\Pegawai;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;

class Pengajuan extends Model
{
    protected $table = 'pegawai__cuti';

    public function Pegawai(){
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }
}
