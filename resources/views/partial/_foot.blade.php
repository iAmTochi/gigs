

<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/slider-bg.js') }}"></script>
<script src="{{ asset('assets/js/smoothproducts.js') }}"></script>
<script src="{{ asset('assets/js/snackbar.min.js') }}"></script>
<script src="{{ asset('assets/js/jQuery.style.switcher.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

@yield('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    toastr.options = {
        "closeButton": true,
        "positionClass": "toast-top-right",
        "progressBar": true,
        "showDuration": "20000",
        "hideDuration": "20000",
        "timeOut": "20000",
        "extendedTimeOut": "20000",
    }
    @if(session()->has('success'))
    toastr.success('{{session()->get('success')}}')
    @elseif(session()->has('info'))
    toastr.info('{{session()->get('info')}}')
    @elseif(session()->has('error'))
    toastr.error('{{session()->get('error')}}')
    @elseif(session()->has('warning'))
    toastr.error('{{session()->get('warning')}}')
    @endif
</script>

</body>

</html>

