@include('partial.admin')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Profil User</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item active">Profil User</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section profile">
        <div class="row">
            <div class="col-xl-4">

                <div class="card">
                    <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                        <img src="{{ asset('logotoko/'.Auth::user()->tokos->logo) }}" alt="">
                        <h1>{{ Auth::user()->username }}</h1>
                        <h2>{{ Auth::user()->email }}</h2>


                    </div>
                </div>

            </div>

            <div class="col-xl-8">

                <div class="card">
                    <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                            <li class="nav-item">
                                <button class="nav-link active" data-bs-toggle="tab"
                                    data-bs-target="#profile-overview">Ringkasan</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit
                                    Profil</button>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link" data-bs-toggle="tab"
                                    data-bs-target="#profile-change-password" >Ganti Password</button>
                            </li>

                        </ul>
                        <div class="tab-content pt-2">

                            <div class="tab-pane fade show active profile-overview" id="profile-overview">

                                <h5 class="card-title">Profil Detail</h5>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label ">Username</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->username }}</div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-3 col-md-4 label">Email</div>
                                    <div class="col-lg-9 col-md-8">{{ Auth::user()->email }}</div>
                                </div>

                            </div>
                            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                                <!-- Profile Edit Form -->
                                <form action="/changePassword/{{ Auth::user()->id }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="username" class="col-md-4 col-lg-3 col-form-label">Username</label>
                                        <div class="col-md-8 col-lg-9">

                                            <input name="username" type="text" class="form-control" id="username"
                                                value="{{ Auth::user()->username }}">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="email" type="email" class="form-control" id="email"
                                                value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>

                                </form><!-- End Profile Edit Form -->
                            </div>



                            <div class="tab-pane fade  pt-3" id="profile-change-password">
                                <!-- Change Password Form -->
                                <form action="/changePassword/{{ Auth::user()->id }}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <label for="current_password" class="col-md-4 col-lg-3 col-form-label">Password
                                            Lama</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="current_password" type="password" class="form-control"
                                                id="current_password">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="new_password" class="col-md-4 col-lg-3 col-form-label">Password
                                            Baru</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="new_password" type="password" class="form-control"
                                                id="new_password">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="konfirmasipassword"
                                            class="col-md-4 col-lg-3 col-form-label">Konfirmasi Password Baru</label>
                                        <div class="col-md-8 col-lg-9">
                                            <input name="new_password_confirmation" type="password"
                                                class="form-control" id="new_password_confirmation">
                                        </div>
                                    </div>
                                    @if ($errors->has('current_password'))
                                        <div class="alert alert-danger" role="alert">
                                            <i class="bi bi-x-lg"></i> {{ $errors->first('current_password') }}
                                        </div>
                                    @endif
                                    @if ($errors->has('new_password'))
                                        <div class="alert alert-danger" role="alert">
                                            <i class="bi bi-x-lg"></i> {{ $errors->first('new_password') }}
                                        </div>
                                    @endif
                                    @if ($errors->has('new_password_confirmation'))
                                        <div class="alert alert-danger" role="alert">
                                            <i class="bi bi-x-lg"></i>
                                            {{ $errors->first('new_password_confirmation') }}
                                        </div>
                                    @endif
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary">Change Password</button>
                                    </div>
                                </form><!-- End Change Password Form -->

                            </div>
                        </div>


                        </div><!-- End Bordered Tabs -->

                    </div>
                </div>

            </div>
        </div>

    </section>

</main><!-- End #main -->


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
