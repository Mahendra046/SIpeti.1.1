<x-module.pegawai>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Cuti Tahunan Anda</h3>
                    <a href="{{ url('pegawai/pengajuan/cuti-tahunan/create') }}" class="float-right btn btn-success">Tambah
                        Data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_pengajuan as $pengajuan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <x-template.button.info-button url="pegawai/pengajuan/cuti-tahunan"
                                                id="{{ $pengajuan->id }}" />
                                            <x-template.button.edit-button url="pegawai/pengajuan/cuti-tahunan"
                                                id="{{ $pengajuan->id }}" />
                                            <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                        </div>
                                    </td>
                                    <td>{{ $pengajuan->keterangan }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Keterangan</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
</x-module.pegawai>
