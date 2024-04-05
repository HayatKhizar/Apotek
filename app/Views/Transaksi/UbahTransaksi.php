<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Ubah Transaksi</h1>
    </div>


    <!-- DataTales Example -->
    <div class="card shadow ">

        <div class="card-body">
            <form>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Tanggal</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Jenis Transaksi</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                            <option>Barang Keluar</option>
                            <option>Barang masuk</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault01">Barang</label>
                        <input type="text" class="form-control" id="validationDefault01" value="Barang" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="validationDefault02">Nama Barang</label>
                        <input type="text" class="form-control" id="validationDefault02" value="Nama Barang" required>
                    </div>
                </div>
                <div class="form-row align-items-center">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault01">Jumlah Barang</label>
                        <input type="text" class="form-control" id="validationDefault01" value="Jumlah Barang" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault02">Harga Total</label>
                        <input type="text" class="form-control" id="validationDefault02" value="Harga Total" required>
                    </div>
                    <div class="btntambahform">
                        <a class="" href="/Transaksi"><button type="button"
                                class=" btn btn-secondary mb-md-n3 btnformtambah">Batal</button></a>
                        <button type="button" class=" btn btn-primary mb-md-n3 btnformtambah">Ubah</button>
                    </div>

                </div>



            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->