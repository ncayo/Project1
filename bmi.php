<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Project UTS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="Project UTS" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="bmi.php" class="nav-link">Kalkulator Sehat</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Project UTS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/man.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nurcahyo</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Praktikum
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="praktikum1.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum2.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum3.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 3</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum4.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 4</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="praktikum5.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Praktikum 5</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Body Mass index
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="bmi.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login BMI</p>
                </a>
              </li>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">BMI</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Fixed Layout</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content-heater">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-12">
              <section class="content" id="buah">

                <div class="container-fluid">
                  <div class="row">
                    <div class="col-12">
                      <!-- Default box -->
                      <div class="card">
                        <div class="card-header bg-primary">
                          <h3 class="card-title">Form BMI</h3>
          
                          <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                              <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                              <i class="fas fa-times"></i>
                            </button>
                          </div>
                        </div>
                        <div class="card-body">
                            <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
                                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                                <title>Kalkulator BMI</title>
                            </head>
                            <body>
                           
<form action="hasil_bmi.php" method="post">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <input id="nama" name="nama" placeholder="Nama Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
    <div class="col-8">
      <input id="tmp_lahir" name="tmp_lahir" placeholder="Tempat Lahir Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tanggal" class="col-4 col-form-label">Tanggal Lahir</label> 
    <div class="col-8">
      <input id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir Anda" type="date" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
        <label for="gender_0" class="custom-control-label">Laki-laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"> 
        <label for="gender_1" class="custom-control-label">Wanita</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="berat" class="col-4 col-form-label">Berat Badan</label> 
    <div class="col-8">
      <input id="berat" name="berat" placeholder="Berat Badan Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="tinggi" class="col-4 col-form-label">Tinggi badan</label> 
    <div class="col-8">
      <input id="tinggi" name="tinggi" placeholder="Tinggi Badan Anda" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="email" name="email" placeholder="Email Anda" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </div>
</form>
                            </body>
                            </html>
</section>
<section>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        @media (max-width: 768px) {
            #scroll {
                overflow: scroll hidden;
            }
        }
    </style>
    <title>Hasil BMI</title>
</head>

<body class="bg-dark">
    <div class="container-fluid">
        <div class="container d-flex justify-content-center py-5">
            <div class="col-md-12 col-12 p-3 rounded-3 bg-white shadow">
                <?php
                require_once 'class_bmi.php';

                $daftarPasien = array(
                    1 =>
                    array(1, '2022-01-30', 'P001', 'Ahmad', 'L', 69.8, 169, 24.7, 'Kelebihan Berat Badan'),
                    array(2, '2022-01-10', 'P002', 'Rina', 'P', 55.3, 165, 20.3, 'Normal (Ideal)'),
                    array(3, '2022-01-11', 'P003', 'Lutfi', 'L', 45.2, 171, 15.4, 'Kekurangan Berat Badan')
                );

                $submit = $_POST['submit'];
                $gender = $_POST['gender'];
                $nama = $_POST['nama'];
                $tmp_lahir = $_POST['tmp_lahir'];
                $tgl_lahir = $_POST['tgl_lahir'];
                $berat = $_POST['berat'];
                $tinggi = $_POST['tinggi'];
                $email = $_POST['email'];

                $pasienBaru = new BMIPasien(count($daftarPasien) + 1, $nama, $tmp_lahir, $tgl_lahir, $email, $gender, $tinggi, $berat);
                $pasienBaru->bmi = $pasienBaru->nilaiBMI();

                array_push($daftarPasien, array($pasienBaru->id, $pasienBaru->tanggal, $pasienBaru->kode, $pasienBaru->nama, $pasienBaru->gender, $pasienBaru->berat, $pasienBaru->tinggi, $pasienBaru->bmi, $pasienBaru->statusBMI($pasienBaru->bmi)));
                echo "<h1 class='fw-bold text-center'>BMI Anda adalah <span class='text-primary'>{$pasienBaru->bmi}</span></h1>";
                ?>
                <div id="scroll">
                    <div class="m-auto my-5" style="display: flex; width: 800px; align-items: flex-start; justify-content: center;">
                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%; overflow-y: hidden;">
                            <?php
                            if ($pasienBaru->bmi <= 18.4) {
                            ?>
                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                    <img alt="condition-icon-underweight" src="assets/svg/bmi-underweight-male-active.svg" style="object-fit: contain; height: 100%; width: auto;">
                                </div>
                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                    <b>Kekurangan Bobot</b>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if ($pasienBaru->bmi > 18.4) {
                            ?>
                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                    <img alt="condition-icon-underweight" src="assets/svg/bmi-underweight-male-inactive.svg" style="object-fit: contain; height: 100%; width: auto;">
                                </div>
                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                    <p>Kekurangan Bobot</p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%; overflow-y: hidden;">
                            <?php
                            if ($pasienBaru->bmi >= 18.5 && $pasienBaru->bmi <= 23.9) {
                            ?>
                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                    <img alt="condition-icon-healthy" src="assets/svg/bmi-healthy-male-active.svg" style="object-fit: contain; height: 100%; width: auto;">
                                </div>
                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                    <b>Sehat</b>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if ($pasienBaru->bmi < 18.5 || $pasienBaru->bmi > 23.9) {
                            ?>
                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                    <img alt="condition-icon-healthy" src="assets/svg/bmi-healthy-male-inactive.svg" style="object-fit: contain; height: 100%; width: auto;">
                                </div>
                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                    <p>Sehat</p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%; overflow-y: hidden;">
                            <?php
                            if ($pasienBaru->bmi >= 24 && $pasienBaru->bmi <= 26.9) {
                            ?>
                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                    <img alt="condition-icon-overweight" src="assets/svg/bmi-overweight-male-active.svg" style="object-fit: contain; height: 100%; width: auto;">
                                </div>
                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                    <b>Kelebihan Bobot</b>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if ($pasienBaru->bmi < 24 || $pasienBaru->bmi > 26.9) {
                            ?>
                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                    <img alt="condition-icon-overweight" src="assets/svg/bmi-overweight-male-inactive.svg" style="object-fit: contain; height: 100%; width: auto;">
                                </div>
                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                    <p>Kelebihan Bobot</p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%; overflow-y: hidden;">
                            <?php
                            if ($pasienBaru->bmi >= 27.0 && $pasienBaru->bmi <= 29.9) {
                            ?>
                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                    <img alt="condition-icon-obese_level_1" src="assets/svg/bmi-obese_level_1-male-active.svg" style="object-fit: contain; height: 100%; width: auto;">
                                </div>
                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                    <b>Obesitas 1</b>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if ($pasienBaru->bmi < 27.0 || $pasienBaru->bmi > 29.9) {
                            ?>
                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                    <img alt="condition-icon-obese_level_1" src="assets/svg/bmi-obese_level_1-male-inactive.svg" style="object-fit: contain; height: 100%; width: auto;">
                                </div>
                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                    <p>Obesitas 1</p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>

                        <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; width: 100%; overflow-y: hidden;">
                            <?php
                            if ($pasienBaru->bmi >= 30.0) {
                            ?>
                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                    <img alt="condition-icon-obese_level_2" src="assets/svg/bmi-obese_level_2-male-active.svg" style="object-fit: contain; height: 100%; width: auto;">
                                </div>
                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                    <b>Obesitas 2</b>
                                </div>
                            <?php
                            }
                            ?>
                            <?php
                            if ($pasienBaru->bmi < 30.0) {
                            ?>
                                <div style="display: flex; min-width: 97px; justify-content: center;">
                                    <img alt="condition-icon-obese_level_2" src="assets/svg/bmi-obese_level_2-male-inactive.svg" style="object-fit: contain; height: 100%; width: auto;">
                                </div>
                                <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; margin-top: 16px; text-align: center;">
                                    <p>Obesitas 2</p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <table class="example display nowrap table-striped table-bordered table" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal Periksa</th>
                            <th>Kode Pasien</th>
                            <th>Nama Pasien</th>
                            <th>Gender</th>
                            <th>Berat (kg)</th>
                            <th>Tinggi (cm)</th>
                            <th>Nilai BMI</th>
                            <th>Status BMI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($daftarPasien as $pasien) {
                            echo "<tr>";
                            echo "<td>" . $pasien[0] . "</td>";
                            echo "<td>" . $pasien[1] . "</td>";
                            echo "<td>" . $pasien[2] . "</td>";
                            echo "<td>" . $pasien[3] . "</td>";
                            echo "<td>" . $pasien[4] . "</td>";
                            echo "<td>" . $pasien[5] . "</td>";
                            echo "<td>" . $pasien[6] . "</td>";
                            echo "<td>" . $pasien[7] . "</td>";
                            echo "<td>" . $pasien[8] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.example').DataTable({
                responsive: true
            });

            new $.fn.dataTable.FixedHeader(table);
        });
    </script>
</body>

</html>
</section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
