
<!-- header backend include file -->
@include('back_end.includes_backend.header')

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header" style="background-color:#FF7A01; color:#FFFFFF;">

        <!-- change routes based on role  -->
            @if(Auth::user()->role == 'admin_user')
            <a href="/admin_dashboard" class="brand-logo">
               BankApp
            </a>
            @elseif(Auth::user()->role == 'normal_user')
            <a href="/user_dashboard" class="brand-logo">
               BankApp
            </a>
            @endif 


            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		
	

        <!-- dashboard_top_bar -->
        @include('back_end.includes_backend.dashboard_top_bar')



        <!--**********************************
            Sidebar start
        ***********************************-->
        @if(Auth::user()->role == "admin_user")
             @include('back_end.includes_backend.sidebar_admin')
        @elseif(Auth::user()->role == "normal_user")
             @include('back_end.includes_backend.sidebar_user')
        @endif
        
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		
		<!--**********************************
            Content body start
        ***********************************-->

        @yield('content')
        
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Developed by <a href="#" target="_blank">Wandie</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

	

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    
    @include('back_end.includes_backend.scripts')
	
	
</body>

</html>