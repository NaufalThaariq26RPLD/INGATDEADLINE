<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            <!--====== Favicon Icon ======-->
            <link rel="shortcut icon" href=" {{ asset('images/favicon.ico') }}" type="image/png">
            <!--====== Bootstrap css ======-->
            <!--====== FontAwesoem css ======-->
            <link rel="stylesheet" href=" {{ asset('fonts/themify-icons/themify-icons.css') }} ">
            <!--====== Flaticon css ======-->
            <link rel="stylesheet" href=" {{ asset('fonts/flaticon/flaticon.css') }} ">
            <!--====== Magnific Popup css ======-->
            <link rel="stylesheet" href=" {{ asset('css/magnific-popup.css') }} ">
            <!--====== Slick css ======-->
            <link rel="stylesheet" href=" {{ asset('css/slick.css') }} ">
            <!--====== Nice-select css ======-->
            <link rel="stylesheet" href=" {{ asset('css/nice-select.css') }}">
            <!--====== Jquery ui css ======-->
            <link rel="stylesheet" href=" {{ asset('css/jquery-ui.min.css') }}">
            <!--====== Animate css ======-->
            <link rel="stylesheet" href=" {{ asset('css/animate.css') }}">
            <!--====== Default css ======-->
            <link rel="stylesheet" href=" {{ asset('css/default.css') }}">
            <!--====== Style css ======-->
            <link rel="stylesheet" href=" {{ asset('css/style.css') }}">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

            <style>
                .divider:after,
                .divider:before {
                content: "";
                flex: 1;
                height: 1px;
                background: #eee;
                }
            </style>
    <title>Document</title>
</head>
<body>
          <!--====== Start Header Section ======-->
          <header class="header-area header-area-one">
            <div class="header-navigation">
                <div class="container-fluid">
                    <div class="primary-menu">
                        <div class="row">
                            <div class="col-lg-2 col-5">
                                <div class="site-branding">
                                    <a href="index.html"><img src=" {{asset('images/Header.jpeg') }}" alt="Brand Logo"></a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-2">
                                <div class="nav-menu">
                                    <div class="navbar-close"><i class="ti-close"></i></div>
                                    <nav class="main-menu">
                                        <ul>
                                            <li class="menu-item "><a href="/dashboard" class="{{ request()->is('dashboard') ? 'active' : '' }}">Home</a>
                                                <ul class="sub-menu">
                                                    
                                                    
                                                </ul>
                                            </li>
                                            <li class="menu-item"><a href="/tentang" class="{{ request()->is('tentang') ? 'active' : '' }}">Tentang</a></li>
                                            <li class="menu-item "><a href="/toko" class="{{ request()->is('toko') ? 'active' : '' }}">Toko</a>
                                                @if(Auth())
                                            <li class="menu-item "><a href="/FAQ"class="{{ request()->is('FAQ') ? 'active' : '' }}">FAQ</a>
                                                @endif
                                                
                                            </li>
                                            <li class="menu-item "><a href="/products" class="{{ request()->is('products') ? 'active' : '' }}">Products</a>
                                            </li>
                                           
                                            @if (Auth()->user())
                                            
                                                
                                            <li class="menu-item "><a href="/logout">Log Out</a>
                                            @else
                                            <li class="menu-item "><a href="/login">Login</a>

                                            @endif
                                            
                                            </li>
                                        </ul>
                                        
                                    </nav>
                                </div>
                            </div>
                          
                            @if (Auth()->user())
                                
                            <div class="col-lg-4 col-5">
                                <div class="header-right-nav">
                                    <ul class="d-flex align-items-center">
                                        <li class="user-btn"><a href="/setting" class="icon"><i class="flaticon-avatar"></i></a></li>
                                      
                                        <li class="nav-toggle-btn">
                                            <div class="navbar-toggler">
                                                <span></span><span></span><span></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--====== End Header Section ======-->
     
      <!--====== Start Preloader ======-->
      <div class="preloader" >
        <div class="loader">
            <img src=" {{ asset('images/loader.png') }}" alt="loader">
        </div>
    </div>

   <div class="container mt-5">
    <div class="main-body">
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3 mt-5">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4>John Doe</h4>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8 mt-5">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      Kenneth Valdez
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      fip@jukmuh.al
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      (239) 816-9029
                    </div>
                  </div>
                 <br>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="__blank" href="https://www.bootdey.com/snippets/view/profile-edit-data-and-skills">Edit</a>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>

        </div>
    </div>

      <!-- MDB -->
      <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
      ></script>

      
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
                <!--====== Jquery js ======-->
                <script src=" {{ asset('js/vendor/jquery-3.6.0.min.js')}} "></script>
                <!--====== Popper js ======-->
                <script src=" {{ asset('js/popper.min.js') }} "></script>
                <!--====== Slick js ======-->
            </div>
        <script src=" {{ asset('js/slick.min.js') }} "></script>
        <!--====== Magnific Popup js ======-->
        <script src=" {{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <!--====== Isotope js ======-->
        <script src=" {{ asset('js/isotope.pkgd.min.js') }}"></script>
        <!--====== Imagesloaded js ======-->
        <script src=" {{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <!--====== Nice-select js ======-->
        <script src=" {{asset('js/jquery.nice-select.min.js') }}"></script>
        <!--====== counterup js ======-->
        <script src=" {{asset('js/jquery.counterup.min.js') }}"></script>
        <!--====== waypoints js ======-->
        <script src=" {{asset('js/jquery.waypoints.js') }}"></script>
        <!--====== Ui js ======-->
        <script src=" {{asset('js/jquery-ui.min.js') }}"></script>
        <!--====== Wow js ======-->
        <script src=" {{asset('js/wow.min.js') }}"></script>
        <!--====== Main js ======-->
        <script src=" {{asset('js/main.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            const SalinBtn = document.getElementById('salin_btn')
            const CodeValue = document.getElementById('code_value')
            
            SalinBtn.onclick = () => {
                CodeValue.select();    // Selects the text inside the input
                document.execCommand('copy');    // Simply copies the selected text to clipboard 
                 Swal.fire({         //displays a pop up with sweetalert
                    icon: 'success',
                    title: 'Text copied to clipboard',
                    showConfirmButton: false,
                    timer: 1000
                });
            }
        </script>
</body>
</html>