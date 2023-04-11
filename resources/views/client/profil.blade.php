@extends('layout.main')

@section('container')
      <!--====== Start Preloader ======-->
      <div class="preloader" >
        <div class="loader">
            <img src=" {{ asset('images/loader.png') }}" alt="loader">
        </div>
    </div>

    <div class="col-xl-8">

        <div class="card">
        <div class="card-body pt-3 pb-3" style="margin-bottom: 20px; margin-top: 10px">
                  <form>
                      <div class="row mb-3 mt-5">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label"> Foto profil</label>
                        <div class="col-md-8 col-lg-9">
                          <img src="https://static.vecteezy.com/system/resources/previews/000/606/536/large_2x/vector-luxury-letter-k-logo-design-concept-template.jpg" alt="Profile" height="100">
                          <div class="pt-2">
                            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><i class="bi bi-upload">EDIT</i></a>
                          </div>
                        </div>
                      </div>
  
                      <div class="row mb-3">
                        <label for="Username" class="col-md-4 col-lg-3 col-form-label"> Username</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="username" type="text" class="form-control" id="username" value="">
                        </div>
                      </div>
                      
                      <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="email" value="">
                        </div>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        <a href="/" class="btn btn-danger">Kembali</a>
                      </div>
                    </form>
                    </div>
            </div>
  
          </div>

@endsection