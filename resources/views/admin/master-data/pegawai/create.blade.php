<x-module.admin>
    <x-template.button.back-button url="admin/master-data/pegawai"/>
<div class="card">
    <div class="card-header">
        <div class="card-title">
            Tambah Data Pegawai
        </div>
    </div>
    <div class="card-body">
        <form action="{{url('admin/master-data/pegawai')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Nik</label>
                        <input type="text" name="nik" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Jabatan</label>
                        <select name="jabatan" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="Kepala Desa">Kepala Desa</option>
                            <option value="Staff Biasa">Staff Biasa</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-info float-right">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
</x-module.admin>
