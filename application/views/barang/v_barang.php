<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data Barang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Data Master</a></li>
                    <li class="breadcrumb-item active">Barang</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <button type="button" class="btn btn-success btn-sm float-right" data-toggle="modal" data-target="#modal-tambah"><i class="fas fa-plus-circle"></i> &nbsp;Tambah Data</button>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Satuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($barang as $result_barang) :
                                ?>
                                    <tr>
                                        <td width="5%" class="text-center"><?= $no++ ?></td>
                                        <td><?= $result_barang->kode_barang ?></td>
                                        <td><?= $result_barang->nama_barang ?></td>
                                        <td><?= $result_barang->satuan ?></td>
                                        <td class="text-center"><a href="" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Ubah</a> <a href="" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="modal-tambah">
    <div class="modal-dialog">
        <div class="modal-content" id="loadforminputbarang">

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->