<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('panel')}}/vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="{{asset('panel')}}/vendors/flag-icon-css/css/flag-icons.min.css">
    <link rel="stylesheet" href="{{asset('panel')}}/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('panel')}}/vendors/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{asset('panel')}}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="{{asset('panel')}}/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="{{asset('panel')}}/vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{asset('panel')}}/vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('panel')}}/css/vertical-light-layout/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{asset('panel')}}/images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('panel.inc.navbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('panel.inc.sidebar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                @yield('content')
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('panel.inc.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('panel')}}/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{asset('panel')}}/vendors/chart.js/chart.umd.js"></script>
<script src="{{asset('panel')}}/vendors/jvectormap/jquery-jvectormap.min.js"></script>
<script src="{{asset('panel')}}/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('panel')}}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="{{asset('panel')}}/vendors/moment/moment.min.js"></script>
<script src="{{asset('panel')}}/vendors/daterangepicker/daterangepicker.js"></script>
<script src="{{asset('panel')}}/vendors/chartist/chartist.min.js"></script>
<script src="{{asset('panel')}}/vendors/progressbar.js/progressbar.min.js"></script>
<script src="{{asset('panel')}}/js/jquery.cookie.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{asset('panel')}}/js/off-canvas.js"></script>
<script src="{{asset('panel')}}/js/hoverable-collapse.js"></script>
<script src="{{asset('panel')}}/js/misc.js"></script>
<script src="{{asset('panel')}}/js/settings.js"></script>
<script src="{{asset('panel')}}/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{asset('panel')}}/js/dashboard.js"></script>
<!-- End custom js for this page -->
</body>
</html>
