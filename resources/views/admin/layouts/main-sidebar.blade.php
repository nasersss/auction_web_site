<div class="leftside-menu">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-light">
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/logo-dash.png')}}" alt="" height="40">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('assets/images/logo_sm.png')}}" alt="" height="30">
                    </span>
    </a>

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
                    <span class="logo-lg">
                        <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="16">
                    </span>
        <span class="logo-sm">
                        <img src="{{asset('assets/images/logo_sm_dark.png')}}" alt="" height="16">
                    </span>
    </a>

    <div class="h-100" id="leftside-menu-container" data-simplebar="">

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">لوحة التحكم</li>
            <li class="side-nav-item">
                <a href="{{route('dash-home')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span>الرئيسية</span>
                </a>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEmail" aria-expanded="false" aria-controls="sidebarEmail" class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> المزادات </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEmail">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('add-auction')}}">أضافة مزاد جديد</a>
                        </li>
                        <li>
                            <a href="{{route('auctions-review')}}">مراجعة مزادات</a>
                        </li>
                    </ul>
                </div>
            </li>


            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarProjects" aria-expanded="false" aria-controls="sidebarProjects" class="side-nav-link">
                    <i class="uil-users-alt"></i>
                    <span> المستخدمين </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarProjects">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('list-user')}}">عرض المستخدمين</a>
                        </li>
                        <li>
                            <a href="#">إدارة المستخدمين</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                    <i class="uil-envelope"></i>
                    <span> التقارير </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="#">تقارير يومية</a>
                        </li>
                        <li>
                            <a href="#">تقارير اسبوعية</a>
                        </li>
                        <li>
                            <a href="#">تقارير شهرية</a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarTasks" aria-expanded="false" aria-controls="sidebarTasks" class="side-nav-link">
                    <i class="uil-car"></i>
                    <span>السيارات </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarTasks">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('view_cat')}}">عرض الأصناف</a>
                        </li>
                        <li>
                            <a href="{{route('add-cat')}}">إضافة صنف </a>
                        </li>
                        <li>
                            <a href="#">تعديل صنف</a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts" aria-expanded="false" aria-controls="sidebarLayouts" class="side-nav-link">
                    <i class="uil-car"></i>
                    <span>سياسات الموقع </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('list_policies')}}">عرض السياسات</a>
                        </li>
                        <li>
                            <a href="{{route('add_policies')}}">إضافة سياسة </a>
                        </li>

                    </ul>
                </div>
            </li>
            <li class="side-nav-item">
                <a href="#" class="side-nav-link">
                    <i class="uil-database"></i>
                    <span>نسخة احتياطية </span>
                </a>
            </li>

            <li class="side-nav-item">
                <a href="#" class="side-nav-link">
                    <i class="dripicons-gear"></i>
                    <span>الإعدادات</span>
                </a>
            </li>







        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->

<!-- ============================================================== -->
<!-- Start Page Content here -->
<!-- ============================================================== -->


