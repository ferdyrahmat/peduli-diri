<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="user-profile">
        <div class="user-image">
            <img src="http://localhost/peduli-diri-native/assets/images/default-user-icon.jpg">
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
            <a class="nav-link" href="http://localhost/peduli-diri-native/home">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item mt-2 <?php if ($_GET['page'] == 'edit-catatan') {
                                        echo "active";
                                    } ?>">
            <a class="nav-link" href="http://localhost/peduli-diri-native/catatan-perjalanan">
                <i class="fa fa-book menu-icon"></i>
                <span class="menu-title">Catatan Perjalanan</span>
            </a>
        </li>
        <li class="nav-item mt-2">
            <a class="nav-link" href="http://localhost/peduli-diri-native/tambah-catatan">
                <i class="fa fa-plus-square menu-icon"></i>
                <span class="menu-title">Tambah Catatan</span>
            </a>
        </li>
        <li class="nav-item mt-4">
            <a class="nav-link" href="keluar" id="logout">
                <i class="fa fa-sign-out menu-icon"></i>
                <span class="menu-title">Keluar</span>
            </a>
        </li>
    </ul>
</nav>