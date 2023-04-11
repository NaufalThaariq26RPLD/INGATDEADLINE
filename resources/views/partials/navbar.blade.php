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