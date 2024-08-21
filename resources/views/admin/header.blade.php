<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Minia - Minimal Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= asset('') ?>assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="<?= asset('') ?>assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <!-- preloader css -->
    <link rel="stylesheet" href="<?= asset('') ?>assets/css/preloader.min.css" type="text/css" />

    <!-- Bootstrap Css -->
    <link href="<?= asset('') ?>assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?= asset('') ?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?= asset('') ?>assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <!-- DataTables -->
    <link href="<?= asset('') ?>assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= asset('') ?>assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="<?= asset('') ?>assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <script src="<?= asset('') ?>assets/libs/jquery/jquery.min.js"></script>

    <!-- Required datatable js -->
    <script src="<?= asset('') ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= asset('') ?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

    <!-- Buttons examples -->
    <script src="<?= asset('') ?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= asset('') ?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= asset('') ?>assets/libs/jszip/jszip.min.js"></script>
    <script src="<?= asset('') ?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="<?= asset('') ?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="<?= asset('') ?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= asset('') ?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?= asset('') ?>assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="<?= asset('') ?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= asset('') ?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- datepicker css -->
    <link rel="stylesheet" href="<?= asset('') ?>assets/libs/flatpickr/flatpickr.min.css">
    <!-- datepicker js -->
    <script src="<?= asset('') ?>assets/libs/flatpickr/flatpickr.min.js"></script>

    <!-- ckeditor -->
    <script src="<?= asset('') ?>assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <!-- Sweet Alert-->
    <link href="<?= asset('') ?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
    <!-- Sweet Alerts js -->
    <script src="<?= asset('') ?>assets/libs/sweetalert2/sweetalert2.min.js"></script>


    <!-- choices css -->
    <link href="<?= asset('') ?>assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />
    <!-- choices js -->
    <script src="<?= asset('') ?>assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/id.js"></script>

    <!-- dropzone css -->
    <link href="<?= asset('') ?>assets/libs/dropzone/min/dropzone.min.css" rel="stylesheet" type="text/css" />
    <!-- dropzone js -->
    <script src="<?= asset('') ?>assets/libs/dropzone/min/dropzone.min.js"></script>

    <!-- echarts js -->
    <script src="<?= asset('') ?>assets/libs/echarts/echarts.min.js"></script>
</head>

<body>

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="dashboard" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?= asset('') ?>assets/images/logo-sm.svg" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= asset('') ?>assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Minia</span>
                            </span>
                        </a>

                        <a href="dashboard" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="<?= asset('') ?>assets/images/logo-sm.svg" alt="" height="24">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= asset('') ?>assets/images/logo-sm.svg" alt="" height="24"> <span class="logo-txt">Minia</span>
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 header-item" id="vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block d-lg-none ms-2">
                        <button type="button" class="btn header-item" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i data-feather="search" class="icon-lg"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">

                            <form class="p-3">
                                <div class="form-group m-0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search ..." aria-label="Search Result">

                                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="dropdown d-none d-sm-inline-block">
                        <button type="button" class="btn header-item" id="mode-setting-btn">
                            <i data-feather="moon" class="icon-lg layout-mode-dark"></i>
                            <i data-feather="sun" class="icon-lg layout-mode-light"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item bg-light-subtle border-start border-end" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="<?= asset('') ?>assets/images/users/avatar-1.jpg" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium">Admin</span>
                            <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <!-- <a class="dropdown-item" href="apps-contacts-profile.html"><i class="mdi mdi mdi-face-man font-size-16 align-middle me-1"></i> Profile</a>
                            <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock font-size-16 align-middle me-1"></i> Lock Screen</a>
                            <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="<?= url('logout') ?>"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>