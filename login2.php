<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Aplikasi Pelaporan Pengaduan Masyarakat </title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body class="body-login">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6 col-lg-6 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <a href="index.php" class="btn btn-success btn-icon-split">
                                <span class="icon text-white-5">
                                    <i class="fa fa-arrow-left"></i>
                                    </span>
                                </a>
                  <div class="text-center">
                    <h1 style="font-family: 'verdana' " class="h4 text-gray-900 mb-4">Selamat Datang di Aplikasi <br>Pelaporan Pengaduan Masyarakat <br>Login Petugas / Admin.</h1>
                  </div>
                  <form class="user" method="post" action="proses-login2.php">
                    <div class="form-group">
                      <input name="username" type="text" class="form-control form-control-user" id="exampleInputNik" aria-describedby="emailHelp" placeholder="Masukan Username Anda..."requie>
                    </div>
                    <div class="form-group">
                      <input name= "password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Password" require>
                    </div>
                    <button type="submit" class="btn btn-success btn-user btn-block body-buttonlogin">
                      Login
                    </button>
                    <hr>
                    <a href="login.php" class="btn btn-success btn-user btn-block body-buttonlogin">
                      <i class="fa fa-arrow-left fa-fw"></i> Kembali Ke Login Masyarakat
                    </a>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
