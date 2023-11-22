<!DOCTYPE html>
<html lang="en">
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>ShipCargoPro | @yield('title') @stack('page-title')</title>
    @include('layout.template.style-css')
</head>

<body>
    <!--Preloader start-->
    <div id="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!--Preloader end-->

    <!--Main wrapper start-->
    <div id="main-wrapper">
        <div class="container-fluid" style="position: relative;">
            <!--Nav header start-->
            <div class="nav-header">
                <a href="#" class="brand-logo">
                    <div class="brand-title">
                        <h2 class="" style="display: inline;">ShipCargoPro</h2>
                    </div>
                </a>
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
            <!--Nav header end-->
            <!--Header start-->
            @include('layout/header/header')
            <!--Header end ti-comment-alt-->

            <!--Sidebar start-->
            @include('layout/navigation-sidebar/navigation-sidebar')
            <!--Sidebar end-->

            <!--Content body start-->
            <div class="content-body">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            <!--Content body end-->

            <!--Footer start-->
            @include('layout/footer/footer')
            <!--Footer end-->
        </div>
        <!--Main wrapper end-->
        @include('layout.template.style-js')
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                },
            })
        </script>
        @stack('scripts')
        <script>
            window.addEventListener("showToastr", function(event) {
                // Livewire.on("showToastr", function(event) {
                toastr.remove();
                if (event.type === 'info') {
                    toastr.info(event.message)
                } else if (event.type === 'success') {
                    toastr.success(event.message)
                } else if (event.type === 'error') {
                    toastr.error(event.message)
                } else if (event.type === 'warning') {
                    toastr.warning(event.message)
                } else {
                    return false
                }
            })
        </script>
</body>

</html>
