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
                        <a href="edit-catatan/<?= $pd['0'] ?>" class="btn btn-info btn-sm">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a href="hapus-catatan/<?= $pd['0'] ?>" class="btn btn-danger btn-sm hapus-catatan">
                            <i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
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

<script src="http://localhost/peduli-diri-native/assets/js/delete.js"></script>