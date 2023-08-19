<x-module.admin>
    <x-template.button.back-button url="admin/master-data/pegawai"/>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pegawai</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <dl>
                        <dt>Nama</dt>
                        <dd>{{$pegawai->nama}}</dd>
                        <dt>Nik</dt>
                        <dd>{{$pegawai->nik}}</dd>
                        <dt>Email</dt>
                        <dd>{{$pegawai->email}}</dd>
                        <dt>Username</dt>
                        <dd>{{$pegawai->username}}</dd>
                        <dt>Jabatan</dt>
                        <dd>{{$pegawai->jabatan}}</dd>
                    </dl>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
</x-module.admin>
