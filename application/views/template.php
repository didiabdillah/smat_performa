<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href=" " type="image/x-icon">
    <link rel="shortcut icon" href=" " type="image/x-icon">
    <title>Bappenda Kab. Sumedang</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/date-picker.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?= base_url()?>assets/cuba/assets/css/color-2.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/cuba/assets/css/datatables.css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="">
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>


  </head>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <div class="main-header-right row m-0">
        
          <div class="main-header-left">
            <div class="logo-wrapper"><a href=""><img class="img-fluid" src=" " alt=""></a></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
          </div>
          <div class="left-menu-header col horizontal-wrapper pl-0">
            <ul class="horizontal-menu">
              <li class="mega-menu">
                <div class="mega-menu-container menu-content">
                  <div class="container-fluid">
                 
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="nav-right col-8 pull-right right-menu">
            <ul class="nav-menus">
    
             
              <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
              <li class="profile-nav onhover-dropdown p-0">
                <div class="media profile-media"><img class="b-r-10" src="<?= base_url()?>assets/cuba/assets/images/dashboard/profile.jpg" alt="">
                  <div class="media-body"><span>Nama User</span>
                    <p class="mb-0 font-roboto">Option <i class="middle fa fa-angle-down"></i></p>
                  </div>
                </div>
                <ul class="profile-dropdown onhover-show-div">
                
                  <li><a href="<?= base_url() ?>Login/logout"><i data-feather="log-out"> </i><span>Log Out</span></a></li>
                </ul>
              </li>
            </ul>
          </div>
          <script id="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">                        
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
          <script id="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
        </div>
      </div>
      <!-- Page Header Ends                              -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
          <div class="logo-wrapper"><a href="<?= base_url()?>"><img class="img-fluid for-light" src="" alt="" width="100"><img class="img-fluid for-dark" src="<?= base_url()?>assets/images/logo.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle" data-feather="grid" id="sidebar-toggle"> </i></div>
          </div>
          <div class="logo-icon-wrapper"><a href="<?= base_url()?>">" width="30" alt=""></a></div>
          <nav>
            <div class="main-navbar">
              <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
              <div id="mainnav">

               
                <ul class="nav-menu custom-scrollbar">
                  <li class="back-btn"><a href="<?= base_url()?>" width="30" alt=""></a>
                    <div class="mobile-back text-right"><span>Back</span><i class="fa fa-angle-right pl-2" aria-hidden="true"></i></div>
                  </li>
                  <li class="sidebar-title">
                    <div>
                      <h6 class="lan-1">General</h6>
                      <p class="lan-2">Dashboards,widgets & layout.</p>
                    </div>
                  </li>
                  <li class="dropdown"><a class="nav-link menu-title link-nav" href="<?=base_url()?>Dashboard/home"><i data-feather="home"></i><span class="lan-3">Dashboard</span>
                  </a>
                    
                  </li>
                </ul>

              </div>
              <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
            </div>


          </nav>
        </header>
        <!-- Page Sidebar Ends-->
        <?php echo $contents ?>

        <!-- footer start-->
        <footer class="footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 footer-copyright">
                <p class="mb-0">Copyright <?= date('Y') ?>© Smart Performa - All rights reserved.</p>
              </div>
              <div class="col-md-6">
                <p class="pull-right mb-0">Developed with  <i class="fa fa-heart font-secondary"></i></p>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- latest jquery-->
    <script src="<?= base_url()?>assets/cuba/assets/js/jquery-3.5.1.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?= base_url()?>assets/cuba/assets/js/bootstrap/popper.min.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/bootstrap/bootstrap.js"></script>
    <!-- feather icon js-->
    <script src="<?= base_url()?>assets/cuba/assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/icons/feather-icon/feather-icon.js"></script>
    <!-- Sidebar jquery-->
    <script src="<?= base_url()?>assets/cuba/assets/js/sidebar-menu.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/config.js"></script>
    <!-- Plugins JS start-->
    <!-- <script src="<?= base_url()?>assets/cuba/assets/js/chart/chartist/chartist.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/chart/chartist/chartist-plugin-tooltip.js"></script> -->
    <script src="<?= base_url()?>assets/cuba/assets/js/chart/knob/knob.min.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/chart/knob/knob-chart.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/chart/apex-chart/apex-chart.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/chart/apex-chart/stock-prices.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/notify/bootstrap-notify.min.js"></script>
    <!-- <script src="<?= base_url()?>assets/cuba/assets/js/dashboard/default.js"></script> -->
    <script src="<?= base_url()?>assets/cuba/assets/js/notify/index.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/datepicker/date-picker/datepicker.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/datepicker/date-picker/datepicker.en.js"></script>
    <!-- <script src="<?= base_url()?>assets/cuba/assets/js/datepicker/date-picker/datepicker.custom.js"></script> -->
    <script src="<?= base_url()?>assets/cuba/assets/js/typeahead/handlebars.js"></script>
    <!-- <script src="<?= base_url()?>assets/cuba/assets/js/typeahead/typeahead.bundle.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/typeahead/typeahead.custom.js"></script> -->
    <!-- <script src="<?= base_url()?>assets/cuba/assets/js/typeahead-search/handlebars.js"></script> -->
    <!-- <script src="<?= base_url()?>assets/cuba/assets/js/typeahead-search/typeahead-custom.js"></script> -->
    <script src="<?= base_url()?>assets/cuba/assets/js/tooltip-init.js"></script>
    <!-- Plugins JS Ends-->
    <!-- Theme js-->
    <script src="<?= base_url()?>assets/cuba/assets/js/script.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/theme-customizer/customizer.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/chart/chartjs/chart.min.js"></script>
    
    <!-- <script src="<?= base_url()?>assets/cuba/assets/js/chart/chartjs/chart.custom.js"></script> -->
   
    <!-- login js-->
    <!-- Plugin used-->

    <script src="<?= base_url()?>assets/cuba/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/datatable/datatable-extension/jszip.min.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
    <script src="<?= base_url()?>assets/cuba/assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
 
    <script src="<?= base_url()?>assets/cuba/assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
    <!-- <script src="<?= base_url()?>assets/cuba/assets/js/datatable/datatables/datatable.custom.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>


  </body>
</html>
