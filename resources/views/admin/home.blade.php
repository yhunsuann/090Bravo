<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{ asset('assets/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('vendors/simplebar/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/vendors/simplebar.css')}}">
    <!-- Main styles for this application-->
    <link href="http://127.0.0.1:8000/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css')}}">
    <link href="{{ asset('css/examples.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3&amp;l=dataLayer&amp;cx=c"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-5&amp;l=dataLayer&amp;cx=c"></script>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <!-- font-awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- datepicker styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css">
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
    <link href="{{ asset('vendors/@coreui/chartjs/css/coreui-chartjs.css') }}" rel="stylesheet">
</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
        <div class="sidebar-brand d-none d-md-flex">
            <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg>
            <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#signet"></use>
            </svg>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">
                                        <svg class="nav-icon">
                                            <use
                                                xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}">
                                            </use>
                                        </svg> Menbers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">
                                        <svg class="nav-icon">
                                            <use
                                                xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-address-book') }}">
                                            </use>
                                        </svg> Blogs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">
                                        <svg class="nav-icon">
                                            <use
                                                xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-speedometer') }}">
                                            </use>
                                        </svg> Recruitmens</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">
                                        <svg class="nav-icon">
                                            <use
                                                xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-contact') }}">
                                            </use>
                                        </svg> Contact</a>
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
        <header class="header header-sticky mb-4">
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
                <ul class="header-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            VIETNAM
                        </a>
                    </li>

                </ul>
                <ul class="header-nav ms-3">
                    <li class="nav-item dropdown">
                        <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
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
                            <a class="dropdown-item" href="{{URL::to('/log-out')}}">
                                <svg class="icon me-2">
                                    <use
                                        xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-account-logout') }}">
                                    </use>
                                </svg> Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                            <!-- if breadcrumb is single--><span>Home</span>
                        </li>
                        <li class="breadcrumb-item active"><span class="text-limit">Dashboard</span></li>
                    </ol>
                </nav>
            </div>
        </header>
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                <div class="row">
                    @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @php Session::forget('success'); @endphp @endif
                    <div class="col">
                        <form action="{{ URL::to('/search') }}" method="get">
                            @csrf
                            <div class="row p-0">
                                <div class="col-sm-6">
                                    <input class="mx-auto keyword" type="text" placeholder="Keyword" name="keyword" id="">
                                    <select class="form-select" aria-label="Default select example" name="status">
                                        <option selected="selected" value="">Select Status</option>
                                        <option value="Active">Active</option>
                                        <option value="UnActive">UnActive</option>
                                        <option value="Expired">Expired</option>
                                        <option value="Closed">Closed</option>
                            </select>
                                </div>
                                <div class="col-sm-6">
                                    <div>
                                        <div class="datepicker date input-group mt-0">
                                            <input name="dateFrom" type="text" placeholder="From date" class="form-control" id="fecha1">
                                            <div class="input-group-append">
                                                <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="datepicker date input-group">
                                            <input name="dateTo" type="text" placeholder="To day" class="form-control" id="fecha1">
                                            <div class="input-group-append">
                                                <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="col">
                                        <input type="submit" class="btn-search btn btn-primary float-end m-2 mr-0 " value="Search"></input>
                                        <a href="{{URL::to('/home')}}" class="btn btn-secondary float-end m-2" value="Reset">Reset</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <form action="{{ URL::to('/delete-select') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <a href="{{ URL::to('/create') }}" type="button" class="btn-create btn btn-success float-end m-2 mr-0">Create</a>
                            <input type="submit" class="delete_all btn-delete btn btn-danger float-end m-2" value="Delete all select"></input>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col" style="overflow-x:auto;">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th><input type="checkbox" id="checkAll"></th>
                                        <th scope="col"><b>Title</b></th>
                                        <th scope="col"><b>Image</b></th>
                                        <th scope="col"><b>Status</b></th>
                                        <th scope="col"><b>Create_at</b></th>
                                        <th scope="col" class="text-center"><b>Action</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($result as $data)
                                    <tr>
                                        <th><input name="ids[]" class="sub_chk" value="{{$data->id}}" id="checkItem" type="checkbox">
                                        </th>
                                        <td>{{ $data->title }}</td>
                                        <td><img width="100px" height="50px" src="{{ asset('assets/img/cruitments/'.$data->image)}}" alt=""></td>
                                        <td>{{ $data->status }}</td>
                                        <td>{{ $data->created_at}}</td>
                                        <td class="text-center">
                                            <a data-id="{{ $data->id }}" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModal" class=" btn-delete btn btn-danger open-modal"><i class="fa fa-solid fa-trash"></i></a>
                                            <a href="{{ URL::to('/edit/'.$data->id)}}" type="button" class="btn-search btn btn-primary"><i class="fa fa-solid fa-wrench"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <td>No Data</td>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
                {{$result->links()}}
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

    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
    <script src="{{ asset('vendors/simplebar/js/simplebar.min.js')}}"></script>
    <!-- Plugins and scripts required by this view-->
    <script src="{{ asset('vendors/chart.js/js/chart.min.js')}}"></script>
    <script src="{{ asset('vendors/@coreui/chartjs/js/coreui-chartjs.js')}}"></script>
    <script src="{{ asset('vendors/@coreui/utils/js/coreui-utils.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Datepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script>
        $(function(e) {
            $('#checkAll').click(function() {
                $('.sub_chk').prop('checked', $(this).prop('checked'));
            });
            $('.open-modal').click(function() {
                var id = $(this).data('id');
                var url = "{{ url('/delete/') }}/" + id;
                $('#btn-delete-recruitments').attr("href", url);
            });
            $(function() {
                $('.datepicker').datepicker({
                    language: "es",
                    autoclose: true,
                    format: "yyyy-mm-dd"
                });
            });
        });
    </script>
</body>

</html>