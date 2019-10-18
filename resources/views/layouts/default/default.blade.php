<!doctype html>
<html>
<head>

    <!-- Custom styles for this template -->    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/ready.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet">
	<!-- /# Custom styles for this template --> 

    @include('includes.default.head')
	@yield('css')	

</head>
<body>

    <!-- Wrapper -->
    <div class="wrapper">
    
        @include('includes.default.header') <!-- Header -->
        @include('includes.default.sidebar') <!-- Sidebar Navigation -->
        <div class="main-panel"> 
            @yield('content') <!-- Content -->
            {{-- @include('includes.admin.footer') --}} <!-- Footer -->
        </div> 

    </div>
    <!-- /# Wrapper -->

    <!-- Bootstrap core JavaScript -->    
    <script src="{{ asset('assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-mapael/maps/world_countries.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/chart-circle/circles.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/ready.min.js') }}"></script>    
    
    @yield('js')
    @yield('jquery')

</body>
</html>