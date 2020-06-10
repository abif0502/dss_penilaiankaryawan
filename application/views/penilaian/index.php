<div class="container">
    <button class="btn btn-primary mt-3 mb-3" id="btnTambahPenilaian"><i class="fas fa-plus"></i> Tambah Penilaian</button>

    <div class="row">
        <div class="col">
            <table class="table display responsive nowrap table-striped table-bordere" style="width:100%"
                id="tablePenilaian">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>NIP</th>
                        <th>Nama Karyawan</th>
                        <th>Nilai MPE</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody></tbody>
        </div>
    </div>
</div>



<!-- Bootstrap modal tambah data-->
<div class="modal fade" id="modal_penilaian" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Tambah Penilaian Karyawan</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="formPenilaian">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="tgl_penilaian"> Tanggal Penilaian </label>
                                <input type="text" class="form-control" id="tgl_penilaian" name="tgl_penilaian"
                                    maxlength="7">
                                <small class="form-text text-danger tgl_penilaian"></small>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="nip_nilai"> NIP </label>
                                <select class="form-control" id="nip_nilai" name="nip_nilai">
                                </select>
                                <small class="form-text text-danger nip_nilai"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="nama_nilai"> Nama Karyawan </label>
                                <input type="text" class="form-control" id="nama_nilai" name="nama_nilai"
                                    maxlength="20" readonly>
                                <small class="form-text text-danger nama_nilai"></small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="kriteria_nilai"> Kriteria </label>
                                  <select class="form-control" id="kriteria_nilai" name="kriteria_nilai">
                                </select>
                                <small class="form-text text-danger kriteria_nilai"></small>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="sub_nilai"> Sub Kriteria </label>
                                  <select class="form-control" id="sub_nilai" name="sub_nilai">
                                </select>
                                <small class="form-text text-danger sub_nilai"></small>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                class="fas fa-times"></i>
                            Batal</button>
                        <button type="submit" class="btn btn-primary buttonSubmit"></button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div><!-- /.modal -->
<!-- End Bootstrap modal -->