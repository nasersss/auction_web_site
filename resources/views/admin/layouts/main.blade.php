<!DOCTYPE html>
<html>

<head>

    @include('admin.layouts.head')

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
<!-- Begin page -->
<div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    @if(Auth::user()->role==0)
        @include('admin.layouts.main-sidebar')

    @elseif(Auth::user()->role==2)
        @include('admin.layouts.main-sidebar-users')

    @endif


    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            @include('admin.layouts.topbar')
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">@yield('breadcrumb-item')</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">@yield('breadcrumb-item2')</a></li>
                                    <li class="breadcrumb-item active">@yield('breadcrumb-item-active')</li>
                                </ol>
                            </div>
                            <h4 class="page-title">@yield('page-title')</h4>
                        </div>
                    </div>
                </div>
            @yield('content')
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
