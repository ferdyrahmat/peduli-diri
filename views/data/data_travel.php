<table class="table table-striped table-bordered" style="width: 100%;" id="dataTravel">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Lokasi</th>
            <th>Suhu</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        session_start();

        $nik = $_SESSION['nik'];
        $no = 1;

        $file = "../../database/catatan_perjalanan.txt";
        $db = file($file, FILE_IGNORE_NEW_LINES);
        foreach ($db as $value) {
            $pd = explode("|", $value);
            if ($pd['1'] == $nik) {
        ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $pd['2']; ?></td>
                    <td><?= $pd['3']; ?></td>
                    <td><?= $pd['4']; ?></td>
                    <td><?= $pd['5']; ?></td>
                    <td>
                        <a href="#" class="btn btn-info btn-sm" data-target="#editModal<?= $pd['0'] ?>" data-toggle="modal">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="" class="btn btn-danger btn-sm">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>

                <div class="modal fade" id="editModal<?= $pd['0'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Catatan Perjalanan</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form class="forms-sample" method="POST" action="" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">Tanggal</label>
                                        <input type="date" name="tanggal" id="" class="form-control" value="<?= $pd['2'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Jam</label>
                                        <input type="time" name="jam" id="" class="form-control" value="<?= $pd['3'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Lokasi</label>
                                        <input type="text" name="lokasi" id="" class="form-control" placeholder="Masukan Lokasi" value="<?= $pd['4'] ?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Suhu</label>
                                        <input type="text" name="suhu" id="" class="form-control" placeholder="Masukan Suhu" value="<?= $pd['5'] ?>">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-info btn-block">Simpan Perubahan</button>
                                    <!-- <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">Batal</button> -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#dataTravel').DataTable();
    });
</script>