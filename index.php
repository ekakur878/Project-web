<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="data.min.js" type="text/javascript" defer></script>
  <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css">

</head>

<body>
  <!-- The sidebar  -->
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
        </div>
        <a href="logout.php">
          <i class='bx bx-log-out' id="log_out"></i>
        </a>
      </li>
    </ul>
  </div>
  <!-- Page content -->
  <section class="home-section">
    <div class="text">Dashboard</div>
  </section>
</body>

</html>