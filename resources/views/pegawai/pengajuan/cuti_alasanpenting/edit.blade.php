<x-module.pegawai>
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ajukan Cuti</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="{{url('pegawai/pengajuan/cuti-alasanpenting', $alasanpenting->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Alamat Selama Cuti</label>
                                <input type="text" name="alamat_selama_cuti" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Berapa Lama</label>
                                <input type="text" name="berapa_lama" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Dari Tanggal</label>
                                <input type="date" name="dari_tanggal" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Sampai Tanggal</label>
                                <input type="date" name="sampai_tanggal" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="" class="control-label">Keterangan</label>
                                <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                    </div>

                        <button class="btn btn-info float-right">save</button>
                    </form>
                </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>



            </x-module.pegawai>
