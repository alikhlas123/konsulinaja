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
      <!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
        >
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">KonsulinAja</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="dashboard2.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />
        
        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="beli.php">
            <i class="fas fa-cart-plus"></i>
            <span>Beli</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />
        
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="konsul.php">
            <i class="fas fa-stethoscope"></i>
            <span>Konsul</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />
        <?php
          $username=$_SESSION['username'];
          $level=$_SESSION['level'];
          if($level=='user'){
        ?>
        <li class="nav-item">
          <a class="nav-link" href="saran.php">
            <i class="fas fa-comment-medical"></i>
            <span>Saran</span></a
          >
        </li>
        <?php
          }else if($level=='dokter'){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="saran2.php">
                <i class="fas fa-comment-medical"></i>
                <span>Saran</span></a
              >
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <li class="nav-item">
              <a class="nav-link" href="jadwal.php">
                <i class="fas fa-calendar-alt"></i>
                <span>Jadwal Praktek</span></a
              >
            </li>
        <?php
          }
        ?>

        <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <li class="nav-item">
              <a class="nav-link" href="jadwal_offline.php">
                <i class="fas fa-calendar-plus"></i>
                <span>Janji Konsul Offline</span></a
              >
            </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
      </ul>
      <!-- End of Sidebar -->

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
                    ><?php echo $_SESSION['username'] ?></span
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
                  <a class="dropdown-item" href="profile.php">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <div class="dropdown-divider"></div>
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
                        <a href="konsul.php">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Saran</h3>
                        </div>
                        </a>
                        <div class="card-body">
                            <div class="table-responsive">
                              <?php
                                $username=$_SESSION['username'];
                                $level=$_SESSION['level'];
                                if($level=='user'){
                              ?>
                            <div class="container-fluid">  
                            <div class="card shadow mb-4">
                            <div class="card-header py-3">
                              <h6 class="m-0 font-weight-bold text-primary">Saran Dokter</h6>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                  <thead>
                                      <tr>
                                        <th>Nama Pasien</th>
                                        <th>Keluhan</th>
                                        <th>Nama Dokter</th>
                                        <th>Nama Penyakit</th>
                                        <th>Saran</th>
                                        <th>Resep Obat</th>
                                      </tr>
                                  </thead>
                                  <?php
                                    include "koneksi.php";
                                    $a="SELECT * FROM saran_konsul INNER JOIN konsul_penyakit ON saran_konsul.id_konsul=konsul_penyakit.id_konsul
                                                                   INNER JOIN register ON register.username=konsul_penyakit.username";
                                    $b=$koneksi->query($a);
                                    while ($c=$b->fetch_array()){
                                  ?>
                                  <form method="post" action="">
                                    <tbody>
                                        <tr>
                                            <td><?php echo $c['nama'];?></td>
                                            <td><?php echo $c['keluhan'];?></td>
                                            <td><?php echo $c['nama_dokter'];?></td>
                                            <td><?php echo $c['nama_penyakit'];?></td>
                                            <td><?php echo $c['saran'];?></td>
                                            <td><a href="download_resep.php?url=<?php echo $c['resep'];?>">Download Resep</a></td>
                                            <td><input type="checkbox" name='id[]' value=<?php echo $c['id_saran']?>></td>
                                        </tr>
                                      </tbody>
                                      <?php
                                    }
                                    ?>
                                </table>
                                <input type="submit" class="btn btn-danger" value="Hapus" name="proses"></input>
                                    <?php
                                      if(isset($_POST['proses'])){
                                        $id=$_POST['id'];
                                        $jumlah=count($id);
                                        for($i=0;$i<$jumlah;$i++){
                                          $a="DELETE FROM saran_konsul WHERE id_saran='$id[$i]'";
                                          $b=$koneksi->query($a);
                                        }
                                        echo"<script> alert('Data berhasil dihapus');
                                        document.location='saran.php'</script>";
                                      }
                                    ?>
                                    </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <?php
                                }else if($level=='dokter'){
                              ?>
                                  <div class="form-group">
                                    <th>Nama Pasien :</th>
                                    <?php
                                      $sql=mysqli_query($koneksi,"SELECT * FROM konsul_penyakit INNER JOIN register ON konsul_penyakit.username=register.username
                                                                                                WHERE id_konsul='$_GET[id_konsul]'");
                                      $data=mysqli_fetch_array($sql);
                                    ?>
                                    <td><?php echo $data['nama'] ?></td>
                                  </div>
                                  <div class="form-group">
                                    <th>Keluhan :</th>
                                    <td><?php echo $data['keluhan'] ?></td>
                                  </div>
                                <form action="aksi_saran.php?id_konsul=<?php echo $data['id_konsul'];?>" method="post" enctype="multipart/form-data">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <div class="form-group">
                                      <label>Nama Dokter</label>
                                      <input type="text" name="nama_dokter" value="<?php echo $_SESSION['nama']?>" class="form-control"></input>
                                    </div>
                                    <div class="form-group">
                                      <label>Penyakit</label>
                                      <input type="text" name="penyakit" class="form-control"></input>
                                    </div>
                                    <div class="form-group">
                                      <label>Saran</label>
                                      <textarea name="saran" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group">
                                      <label>Resep Obat</label>
                                      <input type="file" name="resep" class="form-control"></input>
                                    </div>
                                  </form>
                                </table>
                                <div class="card shadow mb-4">
                                    <div class="card-header py-3">
                                      <button type="Submit" class="btn btn-primary" name="upload">Kirim</button>
                                    </div>
                                </div>
                              <?php
                                }
                              ?>
                            </div>
                        </div>
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