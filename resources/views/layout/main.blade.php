<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TBI_Colsole - {{ $title }} Page</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js" integrity="sha512-mlz/Fs1VtBou2TrUkGzX4VoGvybkD9nkeXWJm3rle0DPHssYYx4j+8kIS15T78ttGfmOjH0lLaBXGcShaVkdkg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Datatable -->
    <link href="./vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- Custom Stylesheet -->
    <link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">
    <!-- Daterange picker -->
    <link href="./vendor/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">


    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link rel="stylesheet" href="./vendor/chartist/css/chartist.min.css">
    	<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="./css/style.css" rel="stylesheet">

    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>

    <!-- ajak realtime -->
    <script type="text/javascript">
    $(document).ready( function() {
        setInterval( function() {
            $("#t_udara").load("bacasuhu");
            $("#rh_udara").load("bacakelembaban");
            $("#t_akar1").load("bacatakar1");
            $("#cahaya").load("bacacahaya");
            $("#tanggal").load("bacatanggal");

            $("#c_light").load("c_light");
            $("#c_lightoff").load("c_lightoff");
            $("#c_pump").load("c_pump");
            $("#c_pumpoff").load("c_pumpoff");
            $("#c_atomizer").load("c_atomizer");
            $("#c_atomizeroff").load("c_atomizeroff");

            $("#dataudara").load("dataudara");


        }, 1000); //interval time
    });
    </script>

<!-- Clockpicker -->
<link href="./vendor/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">

<!-- Custom Stylesheet -->
<link href="./vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">

</head>

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
        <div class="nav-header">
            <a href="/dashboard" class="brand-logo">
                <img class="logo-abbr" src="./images/logo.png" alt="">
                <img class="logo-compact" src="./images/logo-text.png" alt="">
                <img class="brand-title" src="./images/logo-text.png" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->



        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <div class="dashboard_bar">
                                {{ $title }}
                            </div>
                        </div>


                        <ul class="navbar-nav header-right">
                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <script>

                                        function display_ct5() {
                                        var x = new Date()
                                        var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';

                                        var x1=x.getMonth() + 1+ "/" + x.getDate() + "/" + x.getFullYear();
                                        x1 = x1 + " - " +  x.getHours( )+ ":" +  x.getMinutes() + ":" +  x.getSeconds() ;
                                        document.getElementById('ct5').innerHTML = x1;
                                        display_c5();
                                         }
                                         function display_c5(){
                                        var refresh=1000; // Refresh rate in milli seconds
                                        mytime=setTimeout('display_ct5()',refresh)
                                        }
                                        display_c5()
                                        </script>
                                        <span id='ct5' style="background-color: #ffff0000"></span>
                                </a>

                            </li>

                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/17.jpg" width="20" alt=""/>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="./app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>
                                    <a href="./email-inbox.html" class="dropdown-item ai-icon">
                                        <svg id="icon-inbox" xmlns="http://www.w3.org/2000/svg" class="text-success" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <span class="ml-2">Inbox </span>
                                    </a>
                                    <a href="./page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
                    <li><a class="" href="./dashboard" >
							<i class="flaticon-381-home-1"></i>
							<span class="nav-text">Dashboard</span>
						</a>
                    </li>
                    <li><a class="" href="./setup">
							<i class="flaticon-381-notepad"></i>
							<span class="nav-text">Setup Parameter</span>
						</a>
                    <li><a class="" href="./datatable">
							<i class="flaticon-381-networking"></i>
							<span class="nav-text">Database</span>
						</a>
                    </li>
                    <li><a class="" href="javascript:void()" >
							<i class="flaticon-381-user-4"></i>
							<span class="nav-text">Account</span>
                        </a>
                    </li>
                    <li><a class="" href="javascript:void()" >
							<i class="flaticon-381-pencil"></i>
							<span class="nav-text">Post</span>
						</a>

                    </li>
                </ul>


				{{-- <div class="copyright">
					<p><strong>Console</strong> ©All Rights Reserved</p>
					<p>by nasa</p>
				</div> --}}
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
@yield('container')
        <!--**********************************
            Content body end
        ***********************************-->


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http:// /" target="_blank">nfz</a> 2023</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="./js/custom.min.js"></script>
	<script src="./js/deznav-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/console.js') }}"></script>

    <!-- Chart Chartist plugin files -->
    <script src="./vendor/chartist/js/chartist.min.js"></script>
    <script src="./vendor/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
    <script src="./js/plugins-init/chartist-init.js"></script>

    <!-- Chart ChartJS plugin files -->
    <script src="./vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="./js/plugins-init/chartjs-init.js"></script>

    <!-- Daterangepicker -->
    <!-- momment js is must -->
    <script src="./vendor/moment/moment.min.js"></script>
    <script src="./vendor/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- clockpicker -->
    <script src="./vendor/clockpicker/js/bootstrap-clockpicker.min.js"></script>
    <!-- asColorPicker -->
    <script src="./vendor/jquery-asColor/jquery-asColor.min.js"></script>
    <script src="./vendor/jquery-asGradient/jquery-asGradient.min.js"></script>
    <script src="./vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js"></script>
    <!-- Material color picker -->
    <script src="./vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <!-- pickdate -->
    <script src="./vendor/pickadate/picker.js"></script>
    <script src="./vendor/pickadate/picker.time.js"></script>
    <script src="./vendor/pickadate/picker.date.js"></script>



    <!-- Daterangepicker -->
    <script src="./js/plugins-init/bs-daterange-picker-init.js"></script>
    <!-- Clockpicker init -->
    <script src="./js/plugins-init/clock-picker-init.js"></script>
    <!-- asColorPicker init -->
    <script src="./js/plugins-init/jquery-asColorPicker.init.js"></script>
    <!-- Material color picker init -->
    <script src="./js/plugins-init/material-date-picker-init.js"></script>
    <!-- Pickdate -->
    <script src="./js/plugins-init/pickadate-init.js"></script>

    <!-- Flot chart -->
    <script src="./vendor/flot/jquery.flot.js"></script>
    <script src="./vendor/flot/jquery.flot.pie.js"></script>
    <script src="./vendor/flot/jquery.flot.resize.js"></script>
    <script src="./vendor/flot-spline/jquery.flot.spline.min.js"></script>
    <script src="./js/plugins-init/flot-init.js"></script>

    <!-- Datatable -->
    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./js/plugins-init/datatables.init.js"></script>

    <!-- Daterangepicker -->
    <script src="./js/plugins-init/bs-daterange-picker-init.js"></script>
</body>

</html>
