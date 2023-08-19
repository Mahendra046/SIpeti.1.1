<x-module.admin>
    <x-template.button.back-button url="admin/master-data/pegawai"/>
<div class="card">
    <div class="card-header">
        <div class="card-title">
            Tambah Data Module
        </div>
    </div>
    <div class="card-body">
        <form action="{{url('admin/master-data/module')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">App</label>
                        <input type="text" name="app" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Nama</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Title</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Subtitle</label>
                        <input type="text" name="subtitle" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">URL</label>
                        <input type="text" name="url" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Color</label>
                        <input type="color" class="form-control" id="colorInput" name="color" value="#ff0000">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Tag</label>
                        <input type="text" name="tag" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Menu</label>
                        <input type="text" name="menu" class="form-control">
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
<script>
    // Fungsi untuk mengubah warna background color-picker sesuai input warna yang dipilih
    function updateColorPickerColor() {
        const colorInput = document.getElementById('colorInput');
        const colorPicker = document.getElementById('colorPicker');
        colorPicker.style.backgroundColor = colorInput.value;
    }

    // Panggil fungsi updateColorPickerColor saat halaman pertama kali dimuat
    updateColorPickerColor();

    // Tambahkan event listener untuk input warna berubah
    const colorInput = document.getElementById('colorInput');
    colorInput.addEventListener('change', updateColorPickerColor);
</script>
</x-module.admin>
