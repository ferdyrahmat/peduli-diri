<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-profile">
        <div class="user-image">
            <img src="assets/images/default-user-icon.jpg">
        </div>
        <div class="user-name">
            <?= $_SESSION['nama']; ?>
        </div>
        <div class="user-designation">
            <?= $_SESSION['nik']; ?>
        </div>
    </div>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="home">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link" href="catatan-perjalanan">
                <i class="fa fa-book menu-icon"></i>
                <span class="menu-title">Catatan Perjalanan</span>
            </a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link" href="tambah-catatan">
                <i class="fa fa-plus-square menu-icon"></i>
                <span class="menu-title">Tambah Catatan</span>
            </a>
        </li>
        <li class="nav-item mt-4">
            <a class="nav-link" href="#" data-target="#logoutModal" data-toggle="modal">
                <i class="fa fa-sign-out menu-icon"></i>
                <span class="menu-title">Keluar</span>
            </a>
        </li>
    </ul>
</nav>

<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="keluar" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
</div>