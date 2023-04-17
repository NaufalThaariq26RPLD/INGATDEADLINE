      

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