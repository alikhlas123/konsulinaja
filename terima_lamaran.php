<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link
      href="vendor/fontawesome-free/css/all.min.css"
      rel="stylesheet"
      type="text/css"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
  </head>
  <?php
  session_start();
  include "koneksi.php";
  error_reporting(E_ALL^(E_NOTICE|E_WARNING));
  if(!isset($_SESSION['username'])){
    die("Anda belum Login");
  }
  ?>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Search -->
            <form
              class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search"
            >
              <div class="input-group">
                <input
                  type="text"
                  class="form-control bg-light border-0 small"
                  placeholder="Search for..."
                  aria-label="Search"
                  aria-describedby="basic-addon2"
                />
                <div class="input-group-append">
                  <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                  </button>
                </div>
              </div>
            </form>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="alertsDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter"></span>
                </a>
                <!-- Dropdown - Alerts -->
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="alertsDropdown"
                >
                  <h6 class="dropdown-header">Alerts Center</h6>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                      <div class="icon-circle bg-primary">
                        <i class="fas fa-file-alt text-white"></i>
                      </div>
                    </div>
                    <div>
                  </a>
                  <a
                    class="dropdown-item text-center small text-gray-500"
                    href="#"
                    >Show All Alerts</a
                  >
                </div>
              </li>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small"
                    >Admin</span
                  >
                  <img
                    class="img-profile rounded-circle"
                    src="img/undraw_profile.svg"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a
                    class="dropdown-item"
                    href="logout.php"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="card shadow mb-4">
                        <a href="datadokter.php">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Dokter</h6>
                        </div>
                        </a>
                        <div class="card-body">
                            <div class="table-responsive">
                              <form action="" method="post">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Spesialist</th>
                                        <th>Daerah</th>
                                        <th>Lokasi Praktek</th>
                                        <th>Alamat</th>
                                        <th>Waktu Praktek</th>
                                        <th>No.HP</th>
                                        <th>&nbsp;</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                  </thead>
                                  <?php
                                    $id=$_GET['id_dokter'];
                                    $sql="SELECT * FROM dokter INNER JOIN register ON dokter.username_dokter=register.username
                                                   INNER JOIN daerah ON dokter.id_daerah=daerah.id_daerah
                                                   INNER JOIN rs ON dokter.id_rs=rs.id_rs
                                                   WHERE id_dokter='$id'";
                                    $query=$koneksi->query($sql);
                                    $no=1;
                                    while ($data=$query->fetch_array()){
                                  ?>
                                  <tbody>
                                      <tr>
                                        <td><?php echo $no++;?></td>
                                        <td><?php echo $data['username']?></td>
                                        <td><?php echo $data['nama']?></td>
                                        <td><?php echo $data['email']?></td>
                                        <td><?php echo $data['spesialist']?></td>
                                        <td><?php echo $data['nama_daerah']?></td>
                                        <td><?php echo $data['nama_rs']?></td>
                                        <td><?php echo $data['alamat']?></td>
                                        <td><?php echo $data['waktu']?></td>
                                        <td><?php echo $data['no_hp']?></td>
                                        <td>
                                            <img src="foto_dokter/<?php echo $data['foto']?>" width="100">
                                        </td>
                                        <td>
                                            <button name="terima" class="btn btn-primary btn-square">Terima</button>
                                            <button name="tolak" class="btn btn-danger btn-square">Tolak</button>
                                        </td>
                                      </tr>
                                  </tbody>
                                <?php
                                    if (isset($_POST["tolak"])) {
                                        $id = $_GET['id_dokter'];
                                        $sql=mysqli_query($koneksi, "DELETE FROM dokter WHERE id_dokter='$id'");
                                        if (mysqli_affected_rows($koneksi) > 0) {
                                          echo "
                                        <script>
                                        alert('Data berhasil ditolak');
                                        document.location.href='datadokter.php';
                                        </script>";
                                        } else {
                                          echo "
                                        <script>
                                        alert('Data gagal ditolak');
                                        document.location.href='datadokter.php';
                                        </script>";
                                        }
                                      }
                                      if (isset($_POST["terima"])) {
                                        $id = $_GET['id_dokter'];
                                        $sql=mysqli_query($koneksi, "UPDATE dokter SET status='1' WHERE id_dokter='$id'");
                                        if (mysqli_affected_rows($koneksi) > 0) {
                                          echo "
                                        <script>
                                        alert('Data berhasil diterima');
                                        document.location.href='datadokter.php';
                                        </script>";
                                        } else {
                                          echo "
                                        <script>
                                        alert('Data gagal diterima');
                                        document.location.href='datadokter.php';
                                        </script>";
                                        }
                                      }
                                    }
                                ?>
                                </table>
                                </form>
                    </div>
              </div>
          </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript--> 
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>
</html>

</body>
</html>