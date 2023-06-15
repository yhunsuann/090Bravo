<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Bravo</title>
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('vendors/simplebar/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/vendors/simplebar.css')}}">
    <!-- Main styles for this application-->
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{ asset('css/examples.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3&amp;l=dataLayer&amp;cx=c"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <!-- font-awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- datepicker styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.min.css') }}">
    <link href="{{ asset('vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">
    <link href="{{ asset('css/summernote-bs4.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font/summernote.ttf') }}" rel="stylesheet">
    <link href="{{ asset('css/font/summernote.woff') }}" rel="stylesheet">
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>


</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
          BRAVO
        </div>
        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                            <li class="nav-item ">
                                    <a class="nav-link {{ request()->segment(2) === null ? 'active' : '' }}" href="{{ route('admin')}}">
                                        <svg class="nav-icon">
                                            <use
                                                xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}">
                                            </use>
                                        </svg> Dashboard</a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link {{ request()->segment(2) === 'recruitment' ? 'active' : '' }}" href="{{ route('index') }}">
                                        <svg class="nav-icon">
                                            <use
                                                xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-building') }}">
                                            </use>
                                        </svg> Recruitmens</a>
                                </li>
                                <li class="nav-group">
                                    <a class="nav-link nav-group-toggle">
                                        <svg class="nav-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-cursor') }}"></use>
                                    </svg> Post</a>
                                    <ul class="nav-group-items">
                                        <li class="nav-item"><a class="nav-link" href="{{ route('index_member', 'member') }}"><span class="nav-icon"></span>Member</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('index_member', 'office') }}"><span class="nav-icon"></span>Office</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->segment(2) === 'blog' ? 'active' : '' }}" href="{{ route('index_blog') }}">
                                        <svg class="nav-icon">
                                            <use
                                                xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-address-book') }}">
                                            </use>
                                        </svg> Blogs</a>
                                </li>
                                <li class="nav-group">
                                    <a class="nav-link nav-group-toggle" href="">
                                        <svg class="nav-icon">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                                    </svg>Contact</a>
                                    <ul class="nav-group-items">
                                        <li class="nav-item"><a class="nav-link" href="{{ route('contact.index') }}"><span class="nav-icon"></span>Information Contact</a></li>
                                        <li class="nav-item"><a class="nav-link" href="{{ route('index_config') }}"><span class="nav-icon"></span>Config</a></li>
                                    </ul>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 841px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar" style="height: 442px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light bg-white">
        <header class="header header-sticky">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <svg class="icon icon-lg">
                        <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-menu') }}"></use>
                    </svg>
                </button>
                <a class="header-brand d-md-none" href="#">
                    <svg width="118" height="46" alt="CoreUI Logo">
                        <use xlink:href="{{ asset('assets/brand/coreui.svg#full') }}"></use>
                    </svg></a>
                <ul class="nav nav-pills header-nav ms-auto">
                    <li class="nav-item">
                        <!-- <a class="nav-link active language" aria-current="page" >VI</a> -->
                    </li>

                </ul>

                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true">
                            <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('assets/img/avatars/8.jpg') }}" alt="user@email.com"></div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end pt-0">
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Account</div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-bell') }}"></use>
                                </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use
                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-envelope-open') }}">
                                    </use>
                                </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-task') }}"></use>
                                </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use
                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-comment-square') }}">
                                    </use>
                                </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                            <div class="dropdown-header bg-light py-2">
                                <div class="fw-semibold">Settings</div>
                            </div>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                                </svg> Profile</a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-settings') }}">
                                    </use>
                                </svg> Settings</a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-credit-card') }}">
                                    </use>
                                </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-file') }}"></use>
                                </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                                <svg class="icon me-2">
                                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-lock-locked') }}">
                                    </use>
                                </svg> Lock Account</a>
                            <a class="dropdown-item" href="{{URL::to('/admin/user/log-out')}}">
                                <svg class="icon me-2">
                                    <use
                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}">
                                    </use>
                                </svg> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                           <span>Home</span>
                        </li>
                        <li class="breadcrumb-item active"><span class="text-limit">Dashboard</span></li>
                    </ol>
                </nav>
            </div> -->
        </header>
        <div class="body flex-grow-1 px-3 pt-4">
            <div class="container-lg">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- Model Delete -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bg-white">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    You are sure that it delete ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <a id="btn-delete-recruitments" type="button" href="" class="btn btn-danger px-4">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteBlog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bg-white">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    You are sure that it delete ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Close</button>
                    <a id="btn-delete-blog" type="button" href="" class="btn btn-danger px-4">Delete</a>
                </div>
            </div>
        </div>
    </div>

    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
    <script src="{{ asset('vendors/simplebar/js/simplebar.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('vendors/chart.js/js/chart.min.js')}}"></script>
    <script src="{{ asset('vendors/@coreui/chartjs/js/coreui-chartjs.js')}}"></script>
    <script src="{{ asset('vendors/@coreui/utils/js/coreui-utils.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- summernote -->
    <script src="{{ asset('js/summernote-bs4.min.js') }}"></script>
    <!-- Datepicker -->
    <script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('js/layout.js') }}"></script>
</body>

</html>