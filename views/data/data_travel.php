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
        <tr>
            <td>Example Data</td>
            <td>Example Data</td>
            <td>Example Data</td>
            <td>Example Data</td>
            <td>Example Data</td>
            <td>
                <a href="" class="btn btn-info btn-sm">
                    <i class="fa fa-edit"></i>
                </a>
                <a href="" class="btn btn-danger btn-sm">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
    </tbody>
</table>


<script>
    $(document).ready(function() {
        $('#dataTravel').DataTable();
    });
</script>