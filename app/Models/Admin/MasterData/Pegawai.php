<?php

namespace App\Models\Admin\MasterData;
use App\Models\Admin\MasterData\Role;
use App\Models\ModelAuthenticate;
use App\Models\Pegawai\Pengajuan;

class Pegawai extends ModelAuthenticate
{
    protected $table = 'admin__pegawai';

    public $fillable = ['nama','email'];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function role()
    {
        return $this->hasMany(Role::class,'id_pegawai');
    }

    public function Pengajuan(){
        return $this->hasMany(Pengajuan::class, 'id_pegawai');
    }

}
