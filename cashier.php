<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="data.min.js" type="text/javascript" defer></script>
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">
    <link rel="stylesheet" href="index.css">

</head>

<body>
    <!-- The sidebar -->
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus icon'></i>
            <div class="logo_name">CodingKU</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list">
            <li>
                <i class='bx bx-search'></i>
                <input type="text" placeholder="Search...">
                <span class="tooltip">Search</span>
            </li>
            <li>
                <a href="index.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
                <span class="tooltip">Dashboard</span>
            </li>
            <li>
                <a href="cashier.php">
                    <i class='bx bx-cart-alt'></i>
                    <span class="links_name">Cashier</span>
                </a>
                <span class="tooltip">Cashier</span>
            </li>
            <li>
                <a href="suhu.php">
                    <i class='bx bxs-thermometer'></i>
                    <span class="links_name">Suhu</span>
                </a>
                <span class="tooltip">Suhu</span>
            </li>
            <li>
                <a href="luas-volume.php">
                    <i class='bx bx-cuboid'></i>
                    <span class="links_name">Luas dan Volume</span>
                </a>
                <span class="tooltip">Luas dan Volume</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-folder'></i>
                    <span class="links_name">File Manager</span>
                </a>
                <span class="tooltip">Files</span>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Setting</span>
                </a>
                <span class="tooltip">Setting</span>
            </li>
            <li class="profile">
                <div class="profile-details">
                    <img src="img/<?php echo $_SESSION['user']['photo'] ?>" alt="profileImg">
                    <div class="name_job">
                        <div class="name"><?php echo  $_SESSION["user"]["firstname"] ?> <?php echo  $_SESSION["user"]["lastname"] ?></div>
                        <div class="job">Web designer</div>
                    </div>
                    <a href="logout.php">
                        <i class='bx bx-log-out' id="log_out"></i>
                    </a>
            </li>
        </ul>
    </div>
    <!-- Page content -->
    <div class="main-content">
        <form nonvalidate onSubmit="validasi()">
            <!-- title form -->
            <div class="row text-bg-secondary">
                <h1>SILAHKAN PESAN</h1>
            </div>
            <!-- menu makanan-->
            <div class="row">
                <div class="col">
                    <label for="makanan" class="form-label">Menu Makanan</label>
                    <select class="form-select" id="makanan">
                        <option selected>Pilih Makanan</option>
                        <option value="ricarica_biawak">Rica-Rica Biawak</option>
                        <option value="kreco">Kreco</option>
                        <option value="sate_kelinci">Sate Kelinci</option>
                        <option value="sate_bekicot">Sate Bekicot</option>
                        <option value="lontong_balap">Lontong Balap</option>
                    </select>
                </div>
                <!-- jumlah makanan -->
                <div class="col">
                    <label for="jumlah_makanan" class="form-label">Porsi Makanan</label>
                    <input type="number" class="form-control" id="jumlah_makanan" min="1" value="1">
                </div>
                <div class="col d-flex align-items-end justify-content-center">
                    <div class="col">
                        <h5>Harga : </h5>
                    </div>
                    <div class="col" id="harga_makanan">
                        <h5>Rp. 0</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="checkbox" id="showDrinkMenu" name="showDrinkMenu">
                <label for="showDrinkMenu">Tambah Minuman</label>
            </div>
            <!-- menu minuman -->
            <div class="row" id="drinkMenu" style="display: none;">
                <div class="col">
                    <label for="minuman" class="form-label">Menu Minuman</label>
                    <select class="form-select" id="minuman">
                        <option selected>Pilih Minuman</option>
                        <option value="es_teh">Es Teh</option>
                        <option value="teh_tawar">Teh Tawar</option>
                        <option value="teh_anget">Teh Anget</option>
                        <option value="es_teh_anget">Es Teh Anget</option>
                        <option value="kopi_hitam">Kopi Hitam</option>
                    </select>
                </div>
                <!-- jumlah minuman -->
                <div class="col">
                    <label for="jumlah_minuman" class="form-label">Porsi Minuman</label>
                    <input type="number" class="form-control" id="jumlah_minuman" min="1" value="1">
                </div>
                <div class="col d-flex align-items-end justify-content-center">
                    <div class="col">
                        <h5>Harga : </h5>
                    </div>
                    <div class="col" id="harga_minuman">
                        <h5>Rp. 0</h5>
                    </div>
                </div>
            </div>
            <!-- jumlah pesanan -->
            <!-- bayar -->
            <div class="row">
                <!-- total -->
                <div class="col">
                    <span class="col" id="total_harga">Total Harga : Rp. 0</span>
                </div>
                <div class="col">
                    <label for="bayar_pesanan" class="form-label">Bayar Pesanan</label>
                    <input type="number" class="form-control" id="bayar_pesanan" value="0">
                </div>
                <!-- kembalian -->
                <div class="col">
                    <h5>Kembalian : </h5>
                </div>
                <div class="col" id="sisa_kembalian">
                    <h5>Rp. 0</h5>
                </div>
            </div>
            <!-- button pesan -->
            <div class="col">
                <button type="submit" class="btn btn-success">Pesan</button>
            </div>
        </form>
    </div>
</body>

</html>