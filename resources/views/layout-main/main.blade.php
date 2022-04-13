<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="style-layout-main.css" type="text/css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script type="text/javascript" src="Chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     
  </head>
  <body>
    <div class="sidebar">

      <div class="logo-content">
        <div class="logo">
        <!-- <i class='bx bxl-c-plus-plus' ></i> -->
          <div class="logo-name ">
            GO LAUNDRY SYSTEM
          </div>
        </div>
        <i class='bx bx-menu' id="btn"></i>
      </div>

      <ul class="nav_list">
        <li>
          <a href="/dashboard">
            <i class='bx bxs-dashboard' ></i>
            <span class="link-name">Dashboard</span>
          </a>
          <span class="tooltip" href="/dashboard">Dashboard</span>
        </li>
        <li>
          <a href="/pegawai">
            <i class='bx bxs-user-badge' ></i>
            <span class="link-name">Pegawai</span>
          </a>
          <span class="tooltip" href="/pegawai">Pegawai</span>
        </li>
        <li>
          <a href="/pelanggan">
            <i class='bx bxs-user-detail' ></i>
            <span class="link-name">Pelanggan</span>
          </a>
          <span class="tooltip" href="/Pelanggan">Pelanggan</span>
        </li>
        <li>
          <a href="/transaksi">
            <i class='bx bx-transfer-alt' ></i>
            <span class="link-name">Transaksi</span>
          </a>
          <span class="tooltip" href="/transaksi">Transaksi</span>
        </li>
        <li>
          <a href="/paket">
            <i class='bx bx-task' ></i>
            <span class="link-name">Paket</span>
          </a>
          <span class="tooltip" href="/paket">Paket</span>
        </li>
        <li>
          <a href="/laporan">
            <i class='bx bxs-report' ></i>
            <span class="link-name">Laporan</span>
          </a>
          <span class="tooltip" href="/laporan">Laporan</span>
        </li>
      </ul>

      <div class="profile-content">
        <div class="profile">
          <div class="profile-detail">

            <img src="image/profil-img.jpg" alt="">

            <div class="job">
              <div class="name">Luqman Aristio</div>
              <div class="work">Manager</div>

            </div>

          </div>
          <a href="/login" class="out"><i class='bx bx-log-out' id="log-out"></i></a>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="route-page">
        <div class="nama-page">Home </div>

        <div class="search-route">
          <input class="search" type="text" placeholder="Search in page..." required>	
        </div>

      </div>
       @yield('container')
    </div>

    <script>
      let btn = document.querySelector("#btn");
      let sidebar = document.querySelector(".sidebar");

      btn.onclick = function() {
        sidebar.classList.toggle("active");
      }

      btn.onclick = function() {
        sidebar.classList.toggle("active");
      }

      var dt = new Date();
      document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleDateString();
    </script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>