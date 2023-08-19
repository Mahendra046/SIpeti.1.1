<x-module.admin>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Module</h3>
                    <a href="{{ url('admin/master-data/module/create') }}" class="float-right btn btn-success">Tambah
                        Data</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama Module</th>
                                <th>Tag</th>
                                <th>Jumlah Pegawai</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_module as $module)
                            <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/master-data/module"
                                        id="{{ $module->id }}" />
                                    <x-template.button.edit-button url="admin/master-data/module"
                                        id="{{ $module->id }}" />
                                    <a href="" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                </div>
                            </td>
                            <td>{{ $module->name }}</td>
                            <td>{{ $module->tag }}</td>
                            <td>{{ $module->role->count() }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama Module</th>
                                <th>Tag</th>
                                <th>Jumlah Pegawai</th>
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
</x-module.admin>
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
