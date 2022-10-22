<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="images/favicon_1.ico">

    <title>Task Management</title>

    <!-- Base Css Files -->
    <link href="{{ asset('/moltran/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Font Icons -->
    <link href="{{ asset('/moltran/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/moltran/assets/ionicon/css/ionicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('/moltran/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

    <!-- animate css -->
    <link href="{{ asset('/moltran/css/animate.css') }}" rel="stylesheet" />

    <!-- Waves-effect -->
    <link href="{{ asset('/moltran/css/waves-effect.css') }}" rel="stylesheet">

    <!-- sweet alerts -->
    <link href="{{ asset('/moltran/assets/sweet-alert/sweet-alert.min.css') }}" rel="stylesheet">

    <!-- Custom Files -->
    <link href="{{ asset('/moltran/css/helper.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/moltran/css/style.css') }}" rel="stylesheet" type="text/css" />



    <script src="{{ asset('/moltran/js/modernizr.min.js') }}"></script>

</head>


<body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">
        
            <!-- Top Bar Start -->
            <div class="topbar">
                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="md md-terrain"></i> <span>Moltran </span></a>
                    </div>
                </div>
                
                
            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <div class="user-details">
                        <div class="pull-left">
                            <!-- <img src="images/users/avatar-1.jpg" alt="" class="thumb-md img-circle"> -->
                        </div>
                   
                        
                    </div>
                    <!--- Divider -->
           
                    
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End --> 



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        <!-- Start Widget -->
                     
                            <div class="col-md-6 col-sm-6 col-lg-3">
                                <div class="mini-stat clearfix bx-shadow">
                                    <span class="mini-stat-icon bg-purple"><i class="ion-ios7-cart"></i></span>
                                    <div class="mini-stat-info text-right text-muted">
                                        @foreach($data as $item)
                                        <span style="background-color: black; color:white;" class="counter">{{ $item->folder_name }}</span>
                                        @endforeach
                                        Total Jobs Complete
                                    </div>
                            
                                    
                                </div>
                            </div>
                            
                        
                            

                      
                            
                        </div> 
                        <!-- End row-->




                       
                    </div> <!-- container -->
                               
                </div> <!-- content -->

                <footer class="footer text-right">
                    2022 © VastCope IT Company.
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->



        </div>
        <!-- END wrapper -->


</body>
</html>