@extends('client.layout.main')


@section('container')
        <!--====== Start Hero Section ======-->
        <section class="hero-area">
            <div class="breadcrumbs-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="page-title">
                                <h1 class="title">FAQ</h1>
                                <ul class="breadcrumbs-link">
                                    <li><a href="/dashboard" class="link-dark">Home</a></li>
                                    <li class="active">FAQ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--====== End Hero Section ======-->
        <!--====== Start Contact Section ======-->
        <section class="contact-section pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <div class="section-title section-title-left mb-50">
                            <span class="sub-title">FAQ GETVOUCHER</span>

                        </div>
                    </div>
                </div>
                <div class="container py-4">

                  <div class="list-group w-100">
                    @php
                        $no = 0;
                    @endphp
                  @foreach ($data as $data)
                  @php
                      ++$no
                  @endphp
                  <a href="#shortExampleAnswer3collapse{{ $data->id }}" data-mdb-toggle="collapse" aria-expanded="false"
                  aria-controls="shortExampleAnswer1collapse" class="list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">{{ $data->pertanyaan }}</h5>
                  </div>

                   <small class="text-muted"><u>selebihnya</u></small>
                  <!-- Collapsed content -->
                  <div class="collapse mt-3" id="shortExampleAnswer3collapse{{ $data->id }}">
                   {{ $data->answer }}
                  </div>
                </a>
                @if ($no == 5)
                <div class="col-lg-12 mt-3">
                    <div class="form_group">
                        <a href="/lainnya" class="main-btn text-decoration-none">Tampilkan Lebih Banyak</a>
                    </div>
                </div>
                @endif
                @endforeach

                  </div>

                </div>
                    <div class="col-lg-8">
                        <div class="contact-wrapper-one mb-30 wow fadeInRight">
                            <div class="contact-form">
                                <form action="/add/faq" method="post">
                                    @csrf
                                    <div class="row">


                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <textarea class="form_control" placeholder="Pertanyaan Anda" name="pertanyaan"></textarea>
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="form_group">
                                                <button type="submit" class="main-btn">Kirim</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!--====== End Contact Section ======-->


@endsection