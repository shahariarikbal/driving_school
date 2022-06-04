


{{-- jquery --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script> 
<script src="{{asset('/frontend/')}}/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/form-validator.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/contact-form-script.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/aos.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/odometer.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/fancybox.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/jquery.appear.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/tweenmax.min.js"></script>
<script src="{{asset('/frontend/')}}/assets/js/main.js"></script>
{{-- toastr --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>





    {{-- toastr --}}
    <script type="text/javascript">    


    @if (Session::has('success'))
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }   
       toastr.success('{{Session::get('success')}}');
    @endif
    @if (Session::has('error'))
        toastr.options = {
          "closeButton": true,
          "debug": false,
          "newestOnTop": false,
          "progressBar": true,
          "positionClass": "toast-top-right",
          "preventDuplicates": false,
          "onclick": null,
          "showDuration": "300",
          "hideDuration": "1000",
          "timeOut": "5000",
          "extendedTimeOut": "1000",
          "showEasing": "swing",
          "hideEasing": "linear",
          "showMethod": "fadeIn",
          "hideMethod": "fadeOut"
        }   
       toastr.error('{{Session::get('error')}}');
    @endif
    </script>

