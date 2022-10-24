<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Mantenimiento de Producto</title>

    <!-- vendor css -->
    <link href="../../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../../public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../../public/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../../public/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../../public/css/bracket.css">
</head>

<body>

    <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><a href=""><span>[</span>CRUD<span>]</span></a></div>
    <div class="br-sideleft overflow-y-auto">
        <label class="sidebar-label pd-x-15 mg-t-20">Navigation</label>
        <div class="br-sideleft-menu">
            <a href="../home/" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>
                    <span class="menu-item-label">Dashboard</span>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <a href="#" class="br-menu-link">
                <div class="br-menu-item">
                    <i class="menu-item-icon icon ion-ios-filing-outline tx-24"></i>
                    <span class="menu-item-label">Mantenimiento</span>
                    <i class="menu-item-arrow fa fa-angle-down"></i>
                </div><!-- menu-item -->
            </a><!-- br-menu-link -->
            <ul class="br-menu-sub nav flex-column">
                <li class="nav-item"><a href="../MntProducto/" class="nav-link">Producto</a></li>
            </ul>

        </div><!-- br-sideleft-menu -->

        <label class="sidebar-label pd-x-15 mg-t-25 mg-b-20 tx-info op-9">Information Summary</label>

        <div class="info-list">
            <div class="d-flex align-items-center justify-content-between pd-x-15">
                <div>
                    <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Memory Usage
                    </p>
                    <h5 class="tx-lato tx-white tx-normal mg-b-0">32.3%</h5>
                </div>
                <span class="peity-bar"
                    data-peity='{ "fill": ["#336490"], "height": 35, "width": 60 }'>8,6,5,9,8,4,9,3,5,9</span>
            </div><!-- d-flex -->

            <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
                <div>
                    <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">CPU Usage</p>
                    <h5 class="tx-lato tx-white tx-normal mg-b-0">140.05</h5>
                </div>
                <span class="peity-bar"
                    data-peity='{ "fill": ["#1C7973"], "height": 35, "width": 60 }'>4,3,5,7,12,10,4,5,11,7</span>
            </div><!-- d-flex -->

            <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
                <div>
                    <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Disk Usage
                    </p>
                    <h5 class="tx-lato tx-white tx-normal mg-b-0">82.02%</h5>
                </div>
                <span class="peity-bar"
                    data-peity='{ "fill": ["#8E4246"], "height": 35, "width": 60 }'>1,2,1,3,2,10,4,12,7</span>
            </div><!-- d-flex -->

            <div class="d-flex align-items-center justify-content-between pd-x-15 mg-t-20">
                <div>
                    <p class="tx-10 tx-roboto tx-uppercase tx-spacing-1 tx-white op-3 mg-b-2 space-nowrap">Daily Traffic
                    </p>
                    <h5 class="tx-lato tx-white tx-normal mg-b-0">62,201</h5>
                </div>
                <span class="peity-bar"
                    data-peity='{ "fill": ["#9C7846"], "height": 35, "width": 60 }'>3,12,7,9,2,3,4,5,2</span>
            </div><!-- d-flex -->
        </div><!-- info-lst -->

        <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
        <div class="br-header-left">
            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i
                        class="icon ion-navicon-round"></i></a></div>
            <div class="input-group hidden-xs-down wd-170 transition">
                <input id="searchbox" type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
                    <button class="btn btn-secondary" type="button"><i class="fa fa-search"></i></button>
                </span>
            </div><!-- input-group -->
        </div><!-- br-header-left -->
        <div class="br-header-right">
            <nav class="nav">

                <div class="dropdown">
                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                        <span class="logged-name hidden-md-down">Abel Acosta</span>
                        <img src="../../public/img/logo.png" class="wd-32 rounded-circle" alt="">
                        <span class="square-10 bg-success"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-header wd-200">
                        <ul class="list-unstyled user-profile-nav">
                            <li><a href=""><i class="icon ion-ios-person"></i> Edit Profile</a></li>
                            <li><a href=""><i class="icon ion-ios-gear"></i> Settings</a></li>
                            <li><a href=""><i class="icon ion-ios-download"></i> Downloads</a></li>
                            <li><a href=""><i class="icon ion-ios-star"></i> Favorites</a></li>
                            <li><a href=""><i class="icon ion-ios-folder"></i> Collections</a></li>
                            <li><a href=""><i class="icon ion-power"></i> Sign Out</a></li>
                        </ul>
                    </div><!-- dropdown-menu -->
                </div><!-- dropdown -->
            </nav>

        </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->



    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
        <div class="br-pageheader pd-y-15 pd-l-20">
            <nav class="breadcrumb pd-0 mg-0 tx-12">
                <a class="breadcrumb-item" href="index.html">Bracket</a>
                <span class="breadcrumb-item active">Blank Page</span>
            </nav>
        </div><!-- br-pageheader -->
        <div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
            <h4 class="tx-gray-800 mg-b-5">Blank Page (Default Layout)</h4>
            <p class="mg-b-0">Introducing Bracket admin template, the most handsome admin template of all time.</p>
        </div>

        <div class="br-pagebody">

            <!-- start you own content here -->

        </div><!-- br-pagebody -->

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

    <script src="../../public/lib/jquery/jquery.js"></script>
    <script src="../../public/lib/popper.js/popper.js"></script>
    <script src="../../public/lib/bootstrap/bootstrap.js"></script>
    <script src="../../public/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../../public/lib/moment/moment.js"></script>
    <script src="../../public/lib/jquery-ui/jquery-ui.js"></script>
    <script src="../../public/lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../../public/lib/peity/jquery.peity.js"></script>

    <script src="../../public/js/bracket.js"></script>
</body>

</html>