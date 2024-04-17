 <?php
    session_start();
    require_once('../config/config.php');


    if (isset($_SESSION)) {
        $user_role = $_SESSION['role'];
    } else {
        $user_role = $_COOKIE['role'];
    }

    if ($user_role == 1) {
        $admin_img = $baseUrl . "assets/images/editor.jpeg";
    } else {
        $admin_img = $baseUrl . "assets/images/dating.png";
    }


    ?>

 <body class="nav-md">
     <div class="container body">
         <div class="main_container">
             <div class="col-md-3 left_col">
                 <div class="left_col scroll-view">
                     <div class="navbar nav_title" style="border: 0;">
                         <a href="<?php echo $adminBaseUrl ?>index.php" class="site_title"><i class="fa fa-paw"></i> <span>MMCupid</span></a>
                     </div>

                     <div class="clearfix"></div>

                     <!-- menu profile quick info -->
                     <div class="profile clearfix">
                         <div class="profile_pic">
                             <img src="<?php echo $admin_img ?>" alt="..." class="img-circle profile_img">
                         </div>
                         <div class="profile_info">
                             <span>Welcome,</span>
                             <h2 class=""><?php
                                            if (isset($_SESSION['username'])) {
                                                echo $_SESSION['username'];
                                            } else {
                                                echo $_COOKIE['username'];
                                            }
                                            ?>
                                            </h2>
                         </div>
                     </div>
                     <!-- /menu profile quick info -->

                     <br />

                     <!-- sidebar menu -->
                     <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                         <div class="menu_section">
                             <h3>General</h3>
                             <ul class="nav side-menu">
                                 <li><a href="<?php ?>"><i class="fa fa-home"></i> Landing Page</a></li>
                                 <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                     <ul class="nav child_menu">
                                         <li><a href="<?php $adminBaseUrl; ?>create_user.php">Create</a></li>
                                         <li><a href="<?php $adminBaseUrl; ?>show_user.php">Listing</a></li>
                                     </ul>
                                 </li>


                             </ul>
                         </div>

                     </div>
                     <!-- /sidebar menu -->

                     <!-- /menu footer buttons -->

                     <!-- /menu footer buttons -->
                 </div>
             </div>