  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="/">
          <i class="bi bi-grid"></i>
        <span>Halaman Utama</span>
      </a>
    </li><!-- End Dashboard Nav -->
    
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#data-nav" data-bs-toggle="collapse" href="data.html">
        <i class="bi bi-clipboard-data"></i><span>Voucher</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="data-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="=/voucher">
            <i class="bi bi-circle"></i><span>Data Voucher</span>
          </a>
        </li>
        <li>
          <a href="/laris">
            <i class="bi bi-circle"></i><span>Voucher Laris</span>
          </a>
        </li>
        <li>
            <a href="/konfirmasi">
              <i class="bi bi-circle"></i><span>Voucher dikonfirmasi</span>
            </a>
          </li>
          <li>
            <a href="/tolak">
              <i class="bi bi-circle"></i><span>Voucher ditolak</span>
            </a>
          </li>
      </ul>
    </li><!-- End Data Nav -->

      <li class="nav-item">
        <a href="/kategori" class="nav-link collapsed" data-bs-toggle="collapse">
          <i class="bi bi-layout-text-window-reverse"></i><span>Kategori</span>
        </a>


        {{-- <a href="/kategori/" class="nav-link collapsed" data-bs-toggle="collapse">
          <i class="bi bi-layout-text-window-reverse"></i><span>Kategori</span> <i class="bi bi-chevron-down ms-auto"></i>
        </a> --}}
        <!-- ini untuk metode controller satunya  -->
        {{-- <a href="{{url('/kategori/baju')}}"> --}}
        {{-- <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          @foreach ($data as $kategoris)
          <li>
            <a href="/kategori/{{$kategoris->nama_kategori}}">
              <i class="bi bi-circle"></i><span>{{$kategoris->nama_kategori}}</span>
            </a>
          </li>  
          @endforeach
          

        </ul> --}}
        </li><!-- End Tables Nav -->
        
        

      <li class="nav-item">
        <a class="nav-link collapsed" href="/login">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Masuk akun</span>
        </a>
      </li><!-- End Login Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->