<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ url('') }}/assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Movie of Trường Dz</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ url('') }}/assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ url('') }}/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ url('') }}/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/vendor/css/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ url('') }}/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ url('') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="{{ url('') }}/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ url('') }}/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ url('') }}/assets/js/config.js"></script>
    <meta name="csrf-token" content="@csrf" />
    <style>
        .w-25 nav {}
    </style>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('dashboard') }}" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path
                                        d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                        id="path-1"></path>
                                    <path
                                        d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                        id="path-3"></path>
                                    <path
                                        d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                        id="path-4"></path>
                                    <path
                                        d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                        id="path-5"></path>
                                </defs>
                                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                        <g id="Icon" transform="translate(27.000000, 15.000000)">
                                            <g id="Mask" transform="translate(0.000000, 8.000000)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <use fill="#696cff" xlink:href="#path-1"></use>
                                                <g id="Path-3" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-3"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                                </g>
                                                <g id="Path-4" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-4"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                                </g>
                                            </g>
                                            <g id="Triangle"
                                                transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                <use fill="#696cff" xlink:href="#path-5"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span>
                    </a>

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item active">
                        <a href="{{ route('dashboard') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Pages</span>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Account </div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="pages-account-settings-account.html" class="menu-link">
                                    <div data-i18n="Account">Client</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="pages-account-settings-notifications.html" class="menu-link">
                                    <div data-i18n="Notifications">Admin </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                            <div data-i18n="Authentications">Advertising</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="auth-login-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Login</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                    <div data-i18n="Basic">Register</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Misc">Movie</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('admin.movies') }}" class="menu-link">
                                    <div data-i18n="Error">Films</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('admin.movies.new') }}" class="menu-link">
                                    <div data-i18n="Under Maintenance">New Film</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </aside>
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none"
                                    placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                    data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="data:image/png;base64,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"
                                            alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="data:image/png;base64,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"
                                                            alt class="w-px-40 h-auto rounded-circle" />
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">John Doe</span>
                                                    <small class="text-muted">Admin</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('admin.logout') }}">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Log Out</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                @yield('main')
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ url('') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ url('') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ url('') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ url('') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ url('') }}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ url('') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{ url('') }}/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ url('') }}/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
