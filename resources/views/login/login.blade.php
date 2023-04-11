<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Masuk</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: NiceAdmin - v2.5.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                        class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <div class="d-flex justify-content-center py-4">

                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Masuk Untuk Masuk Akun Anda</h5>
                                <p class="text-center small">Masukkan Username Dan Password Anda Untuk Masuk</p>
                            </div>
                            <form action="/loginuser" method="post">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="text" name="username" id="username"
                                        class="form-control form-control-lg" autofocus required>
                                    <label class="form-label" for="username">Username</label>
                                </div>

                                <!-- Password input -->
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" name="password"
                                        class="form-control form-control-lg" required>
                                    <label class="form-label" for="form1Example23">Password</label>
                                </div>

                                <div class="d-flex mb-2">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <p class="text-decoretion-none">Belum Memiliki Akun?,<a href="/register">Daftar
                                                Sekarang</a>!</p>
                                    </div>
                                </div>

                                @error ($errors->has('username'))
                                    <div class="alert alert-danger" role="alert">
                                        <i class="bi bi-x-lg"></i> {{ $errors->first('username') }}
                                    </div>
                                @enderror
                                @error ($errors->has('password'))
                                    <div class="alert alert-danger" role="alert">
                                        <i class="bi bi-x-lg"></i> {{ $errors->first('password') }}
                                    </div>
                                @enderror
                                <!-- Submit button -->
                                <div class="text-center text-lg-start mt-2 pt-2">
                                    <button type="submit" class="btn btn-primary btn-lg"
                                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Masuk</button>
                                </div>
                                @if ($errors->has('username'))
                                <div class="alert alert-danger mt-2" role="alert">
                                  {{$errors->first('username')}}
                                </div>
                                @endif
                                @if ($errors->has('email'))
                                <div class="alert alert-danger mt-2" role="alert">
                                  {{$errors->first('email')}}
                                </div>
                                  
                                @endif
                                @if ($errors->has('password'))
                                <div class="alert alert-danger mt-2" role="alert">
                                  {{$errors->first('password')}}
                                </div>
                                  
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
    </section>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
