<!DOCTYPE html>
<html lang="en">
@include('partials.head')
<body>
<div class="wrapper">
    <div class="main-header">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="blue">

            <a href="{{route('admin.dashboard')}}" class="logo">
                <img src="{{asset('themes/admins/e-shop/gorlabs/img/logo2.png')}}" width="45" alt="navbar brand" class="navbar-brand"> <strong class="text-white ml-1">Gorlabs</strong>
            </a>
            <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
            </button>
            <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="icon-menu"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        @include('partials.nav-bar')
        <!-- End Navbar -->
    </div>
    <!-- Sidebar -->
@include('partials.sidebar')
    <!-- End Sidebar -->
    <div class="main-panel">
        <div class="content">
            @yield('content')
        </div>
        @include('partials.footer')
    </div>
</div>
<script src="{{mix('themes/admins/e-shop/gorlabs/js/gorlabs.js')}}"></script>

<script>
    WebFont.load({
        google: {"families": ["Lato:300,400,700,900"]},
        custom: {
            "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
            urls: ['/themes/admins/e-shop/gorlabs/css/fonts.css']
        },
        active: function () {
            sessionStorage.fonts = true;
        }
    });

</script>
@yield('page-level-scripts')
</body>
</html>
