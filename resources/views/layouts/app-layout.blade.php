<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="format-detection" content="telephone=no">
<title>Leanteam HTML Template</title>
<meta name="author" content="">
<meta name="description" content="HTML Teamplate">
<meta name="keywords" content="agency, personal, photography, one page">

<!-- FAVICON FILES -->
<link href="assets/images/icons/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
<link href="assets/images/icons/apple-touch-icon-120-precomposed.png" rel="apple-touch-icon" sizes="120x120">
<link href="assets/images/icons/apple-touch-icon-76-precomposed.png" rel="apple-touch-icon" sizes="76x76">
<link href="assets/images/icons/favicon.png" rel="shortcut icon">

<!-- CSS FILES -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/fonts/iconfonts.css">
<link rel="stylesheet" href="assets/css/plugins.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/responsive.css">
<link rel="stylesheet" href="assets/css/color.css">
</head>
<body>
<div id="dtr-wrapper" class="clearfix"> 
    
    <!-- preloader starts -->
    <div class="dtr-preloader">
        <div class="dtr-preloader-inner">
            <div class="dtr-preloader-img"></div>
        </div>
    </div>
    <!-- preloader ends --> 
    
    <!-- Small Devices Header 
============================================= -->
    <div class="dtr-responsive-header fixed-top">
        <div class="container"> 
            
            <!-- small devices logo --> 
            <!-- <a href="index.html"><img src="assets/images/logo-dark.png" alt="logo"></a>  -->
            <!-- small devices logo ends --> 
            
            <!-- menu button -->
            <button id="dtr-menu-button" class="dtr-hamburger" type="button"><span class="dtr-hamburger-lines-wrapper"><span class="dtr-hamburger-lines"></span></span></button>
        </div>
        <div class="dtr-responsive-header-menu"></div>
    </div>
    <!-- Small Devices Header ends 
============================================= --> 
    
    <!-- Header 
============================================= -->
    <header id="dtr-header-global" class="fixed-top">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between"> 
                
                <!-- header left starts -->
                <div class="dtr-header-left"> 
                    
                    <!-- logo --> 
                    
                    
                    <!-- logo on scroll --> 
                 
                    <!-- logo on scroll ends --> 
                    
                </div>
                <!-- header left ends --> 
                
                <!-- menu starts-->
                <div class="dtr-header-right">
                    <div class="main-navigation dtr-menu-dark">
                        <ul class="sf-menu dtr-scrollspy dtr-nav dark-nav-on-load dark-nav-on-scroll">
                            <li> <a class="nav-link" href="#home">Home</a> </li>
                            <li> <a class="nav-link" href="#about">About</a> </li>
                            <li> <a class="nav-link" href="#services">Services</a> </li>
                            <li> <a class="nav-link" href="#portfolio">Works</a> </li>
                            <!-- <li> <a class="nav-link" href="#blog">blog</a> </li> -->
                            <li> <a class="nav-link" href="#contact">Contact</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- menu ends --> 
                
            </div>
        </div>
    </header>
    <!-- header ends
================================================== --> 
    
    <!-- == main content area starts == -->
    <div id="dtr-main-content"> 
      
        {{ $slot }}
        
        <!-- footer section starts
================================================== -->
        <footer id="dtr-footer"> 
            
            <!--== copyright starts ==-->
            <div class="dtr-copyright">
                <div class="container"> 
                    
                    <!--== row starts ==-->
                    <div class="row"> 
                        
                        <!-- column 1 starts -->
                        <div class="col-12 col-md-6">
                            <p>Copyright © Leanteam 2022. All rights reserved.</p>
                        </div>
                        <!-- column 1 ends --> 
                        
                        <!-- column 2 starts -->
                        <div class="col-12 col-md-6 text-right">
                            <ul class="dtr-pipe-list">
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms of Use</a></li>
                            </ul>
                        </div>
                        <!-- column 2 ends --> 
                        
                    </div>
                    <!--== row ends ==--> 
                    
                </div>
            </div>
            <!--== copyright ends ==--> 
            
        </footer>
        <!-- footer section ends
================================================== --> 
        
    </div>
    <!-- == main content area ends == --> 
    
</div>
<!-- #dtr-wrapper ends --> 

<!-- JS FILES --> 
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/plugins.js"></script> 
<script src="assets/js/custom.js"></script>
</body>
</html>