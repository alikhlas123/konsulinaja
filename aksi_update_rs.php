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
            <a href="data_rs.php">
            <div class="card-header py-3">
              <h2 class="m-0 font-weight-bold text-primary">Data Rumah Sakit</h2>
            </div>
            </a>
            <div class="card shadow mb-4">
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <form action="" method="post">
                                  <?php
                              include "koneksi.php";
                                $sql="SELECT * FROM daerah";
                                $query=$koneksi->query($sql);
                                while ($data=$query->fetch_array()){
                              ?>
                              <td><?php echo $data['id_daerah'];?></td>
                              <td>=</td>
                              <td><?php echo $data['nama_daerah'];?></td>
                              <?php
                              }
                              ?>
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <tr>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>Daerah</th>
                                        </tr>
                                    <?php
                                        include "koneksi.php";
                                        $id=$_POST['id'];
                                        $jumlah=count($id);
                                        for($i=0;$i<$jumlah;$i++){
                                            $a="SELECT * FROM rs WHERE id_rs='$id[$i]'";
                                            $b=$koneksi->query($a);
                                            while ($c=$b->fetch_array()){
                                                echo
                                                "<tr>
                                                    <td><input type='text' name='nama[]' value='$c[nama_rs]'></td>
                                                    <td><input type='text' name='alamat[]' value='$c[alamat]'></td>
                                                    <td><input type='text' name='daerah[]' value='$c[id_daerah]' placeholder='ID daerah'></td>
                                                    <input type='hidden' name='id[]' value='$c[id_rs]'>
                                                </tr>";
                                            }
                                        }
                                    ?>
                                </table>
                                <input type="hidden" name="jumlah" value="<?php echo $jumlah; ?>">
                                <input type="submit" class="btn btn-warning" name="update" value="Update">
                                </form>
                                <?php
                                    if(isset($_POST['update'])){
                                        $jum=$_POST['jumlah'];
                                        $id=$_POST['id'];
                                        $nama=$_POST['nama'];
                                        $alamat=$_POST['alamat'];
                                        $daerah=$_POST['daerah'];

                                        for($i=0;$i<$jum;$i++){
                                            $sql="UPDATE rs SET
                                            nama='$nama[$i]',
                                            alamat='$alamat[$i]',
                                            id_daerah='$daerah[$i]'
                                            WHERE id_rs='$id[$i]'";
                                            $query=$koneksi->query($sql);
                                        }
                                        echo"<script> alert('Data berhasil diedit');
                                        document.location='data_rs.php'</script>";
                                    }
                                ?>
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