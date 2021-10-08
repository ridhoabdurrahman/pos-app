<div class="modal-header">
    <h4 class="modal-title">Tambah Barang</h4>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="<?= base_url() ?>barang/simpanbarang" method="POST" id="formTambahBarang">
    <div class="modal-body">
        <div class="form-group">
            <label for="kd-barang">Kode Barang</label>
            <input type="text" class="form-control" name="kdbarang" id="kd-barang" placeholder="Masukkan Kode Barang" autofocus>
        </div>
        <div class="form-group">
            <label for="nm-barang">Nama Barang</label>
            <input type="text" class="form-control" name="nmbarang" id="nm-barang" placeholder="Masukkan Nama Barang">
        </div>
        <div class="form-group">
            <label for="sat-barang">Satuan</label>
            <select name="satbarang" id="sat-barang" class="form-control">
                <option value="">--- Pilih Satuan ---</option>
                <option value="pcs">PCS</option>
                <option value="unit">Unit</option>
            </select>
        </div>
    </div>
    <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
    </div>
</form>

<script>
    $(function() {
        $("#formTambahBarang").validate({
            rules: {
                kdbarang: {
                    required: true,
                    pattern: "[A-Za-z0-9 ]+",
                },
                nmbarang: {
                    required: true,
                },
                satbarang: {
                    required: true,
                }
            },
            messages: {
                kdbarang: {
                    required: "Kode Barang masih Kosong !",
                    pattern: "Kode Barang hanya bisa diisi oleh Huruf dan Angka !",
                },
                nmbarang: {
                    required: "Nama Barang masih Kosong !",
                },
                satbarang: {
                    required: "Silahkan pilih satuan barang !"
                }
            },
            errorElement: "span",
            errorPlacement: function(error, element) {
                error.addClass("invalid-feedback");
                element.closest(".form-group").append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass("is-invalid");
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass("is-invalid");
            },
        });
    });
</script>