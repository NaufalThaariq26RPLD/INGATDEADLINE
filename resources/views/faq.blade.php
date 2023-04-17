@include('partial.sidebar-navbar')

<main id="main" class="main">

    <div class="pagetitle">
        <h1>FAQ</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item active">FAQ</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

        <!-- Recent Sales -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto" id="content">
                <div class="card-body">
                    <h5 class="card-title">FAQ Belum Dibalas</h5>
                    <a href="" id="deleteallselecteddata1" type="button" class="btn btn-danger mb-2">Hapus Semua Data Yang Dipilih <i class="bi bi-x-lg"></i></a>
                    <div class="form-check mb-3" style="font-size: 20px" >
                        <input  type="checkbox" name="" id="select_all_idss" class="form-check-input">
                        <label class="form-check-label" for="select_all_idss">
                            Pilih Semua
                        </label>
                        <input type="search" class="bx-pull-right" name="search" id="search" placeholder="Search Here">
                      </div>

                      <div class="faq1">
                        @foreach ($data->take(5) as $datas)
                        <div class="alert alert-info faq1" role="alert"
                            style="display: flex; justify-content: space-between; position: relative; gap: 0px 10px;" id="faqq{{ $datas->id }}">
                            <div>
                                <h1 style="font-size: 12px; font-weight: bold">From : {{ $datas->username }}</h1>
                                <h1 style="font-size: 12px; font-weight: bold;overflow:hidden;max-height: 25% ">Email :
                                    {{ $datas->email }}</h1>
                                Pertanyaan : {{ $datas->pertanyaan }}
                            </div>

                            <a href="/faqtampil/{{ $datas->id }}" class="alert-link"
                                style="font-weight:bold; color: black; margin-left: auto; display: inline-block; margin-top: auto; margin-bottom: auto; width: 10%; float: right">Balas
                                <svg xmlns="http://www.w3.org/2000/svg" style="width: 10px" viewBox="0 0 448 512">
                                    <path
                                        d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                                </svg> </a>
                            <a style="font-weight:bold; color: black;  display: inline-block; margin-top: auto; margin-bottom: auto; width: 10%; float: right" class="alert-link" href="/faqdelete/{{ $datas->id }}">
                                <i class="bi bi-x-lg"></i> Hapus
                            </a>
                            <input style="font-weight:bold; color: black; display: inline-block; margin-top: auto; margin-bottom: auto; font-size: 20px; float: right;" type="checkbox" name="idss" id="checkboxx" class="form-check-input checkbox_idss" value="{{ $datas->id }}">

                        </div>
                    @endforeach
                      </div>
                      <div class="faq2">

                      </div>

                        {{ $data->appends(["data2"=> $data2->currentPage()])->links() }}
                </div>

            </div>
        </div>
        <!--End Recent Sales*-->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">FAQ Sudah Dibalas</h5>
                    <a href="" id="deleteallselecteddata" type="button" class="btn btn-danger mb-2">Hapus Semua Data Yang Dipilih <i class="bi bi-x-lg"></i></a>
                    <div class="form-check mb-2" style="font-size: 20px" >

                        <input  type="checkbox" name="" id="select_all_ids" class="form-check-input">
                        <label class="form-check-label" for="select_all_ids" id="">
                            Pilih Semua
                        </label>
                        <input type="search" class="bx-pull-right" name="search2" id="search2" placeholder="Search Here">

                      </div>
                      <div class="faq3">
                        @foreach ($data2->take(5) as $data2s)
                        <div class="alert alert-info "
                            style="display: flex; justify-content: space-between; position: relative; gap: 0px 10px;overflow:auto" id="faq{{ $data2s->id }}" >
                            <div>
                                <h1 style="font-size: 12px; font-weight: bold">From : {{ $data2s->username }}</h1>
                                <h1 style="font-size: 12px; font-weight: bold">Email : {{ $data2s->email }}</h1>
                                <h1 style="font-size: 12px; font-weight: bold">Pertanyaan : {{ $data2s->pertanyaan }}
                                </h1>
                                <h1 style="font-size: 12px; font-weight: bold">Jawaban : {{ $data2s->answer }}</h1>
                            </div>

                            <a href="/faqupdates/{{ $data2s->id }}" class="alert-link"
                                style="font-weight:bold; color: black; margin-left: auto; display: inline-block; margin-top: auto; margin-bottom: auto; width: 10%; float: right">Update
                                <i class="bi bi-pencil-square"></i><a
                                    style="font-weight:bold; color: black; display: inline-block; margin-top: auto; margin-bottom: auto; width: 10%; float: right"
                                    class="alert-link" href="/faqdelete/{{ $data2s->id }}">
                                    <i class="bi bi-x-lg"></i> Hapus
                                </a>
                                <input style="font-weight:bold; color: black; display: inline-block; margin-top: auto; margin-bottom: auto; font-size: 20px; float: right;" type="checkbox" name="ids" id="checkbox" class="form-check-input checkbox_ids" value="{{ $data2s->id }}">

                        </div>
                    @endforeach
                      </div>
                      <div class="faq4">

                      </div>


                            {{ $data2->appends(['data' => $data->currentPage()])->links() }}

                </div>

            </div>
        </div>
        <!--End Recent Sales*-->
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<script>
    $(function(e) {
        $("#select_all_ids").click(function() {
            $('.checkbox_ids').prop('checked', $(this).prop('checked'));
        });
        $('#deleteallselecteddata').click(function(e) {
            e.preventDefault();
            var all_ids = [];
            $('input:checkbox[name=ids]:checked').each(function(){
                all_ids.push($(this).val());
            });

            $.ajax({
                url: "{{ route('faqall') }}",
                type: "DELETE",
                data: {
                    ids: all_ids,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $.each(all_ids, function(key, val) {
                        $('#faq' + val).remove();
                    })
                }
            })
        })
    });
    $(function(e) {
        $("#select_all_idss").click(function() {
            $('.checkbox_idss').prop('checked', $(this).prop('checked'));
        });
        $('#deleteallselecteddatas').click(function(e) {
            e.preventDefault();
            var all_ids = [];
            $('input:checkbox[name=idss]:checked').each(function(){
                all_ids.push($(this).val());
            });

            $.ajax({
                url: "{{ route('faqall') }}",
                type: "DELETE",
                data: {
                    ids: all_ids,
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $.each(all_ids, function(key, val) {
                        $('#faqq' + val).remove();
                    })
                }
            })
        })
    });

    $('#search').on('keyup',function(e){

        $value = $(this).val();
        if($value !== ""){
            $('.faq1').hide();
            $('.faq2').show();
        }
        if($value == ""){
            $('.faq2').hide();
            $('.faq1').show();

        };

        $.ajax({
            type:"Get",
            url:"{{route('searchfaq') }}",
            data:{
                'search':$value
            },
            success:function(data){
                console.log(data);
                $('.faq2').html(data);
            }
        });
    })
    $('#search2').on('keyup',function(){
        $value =$(this).val();
        if($value !== ""){
            $('.faq3').hide();
            $('.faq4').show();
        }
        if($value == ""){
            $('.faq4').hide();
            $('.faq3').show();
        }

        $.ajax({
            type:"Get",
            url:"{{route('searchfaq2') }}",
            data:{
                'search':$value
            },
            success:function(data){
                console.log(data);
                $('.faq4').html(data);
            }
        });
    })
</script>

</body>

</html>
