<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12 mb-4 mb-xl-0">
            <h4 class="font-weight-bold text-dark">Tambah Catatan Perjalanan</h4>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" method="POST" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" class="form-control" id="tanggal">
                        </div>
                        <div class="form-group">
                            <label for="jam">Jam</label>
                            <input type="time" class="form-control" id="jam">
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" class="form-control" id="lokasi" placeholder="Masukan Lokasi">
                        </div>
                        <div class="form-group">
                            <label for="suhu">Suhu</label>
                            <input type="number" class="form-control" id="suhu" placeholder="Masukan Suhu">
                        </div>
                        <button type="submit" class="btn btn-info btn-block">Simpan Catatan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>