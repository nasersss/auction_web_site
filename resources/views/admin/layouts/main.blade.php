<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.layouts.head')

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
<!-- Begin page -->
<div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.layouts.main-sidebar')
    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            @include('admin.layouts.topbar')
            <!-- end Topbar -->

            <!-- Start Content-->
            @include('admin.layouts.main-content')
        <!-- content -->

        <!-- Footer Start -->
        @include('admin.layouts.footer')
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
@include('admin.layouts.dash-settings')

<div class="rightbar-overlay"></div>
<!-- /End-bar -->

@include('admin.layouts.footer-scripts')
</body>
</html>
