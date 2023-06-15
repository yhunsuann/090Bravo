<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v4.2.2
* @link https://coreui.io
* Copyright (c) 2022 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">

<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Bravo</title>
    <link rel="manifest" href="{{ asset('assets/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendors styles-->
    <link rel="stylesheet" href="{{ asset('css/vendors/simplebar.css')}}">
    <link rel="stylesheet" href="{{ asset('css/vendors/simplebar.css')}}">
    <!-- Main styles for this application-->
    <link href="{{ asset('css/style.css')}}" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/prismjs@1.23.0/themes/prism.css">
    <link href="{{ asset('css/examples.css')}}" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
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
    <?php
        $token = $_GET['token'];
    ?>  
    <div class="bg-light min-vh-100 d-flex flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="card-group d-block d-md-flex row">
                        <div class="card col-md-7 p-4 mb-0">
                            <div class="card-body">
                                <h1>Set new Pass</h1>
                                <form method="POST" action="{{ route('admin.user.update-new-pass') }}">
                                    @csrf
                                    <div class="input-group mb-3">
                                        <span class="input-group-text">
                                        <svg class="icon">
                                                    <use xlink:href="http://127.0.0.1:8000/vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                                        </svg>
                                            </span>
                                        <input class="form-control" type="text" name="new_pass"  placeholder="New Pass">
                                        <input type="hidden" name="token" value="{{ $token }}">
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <input type="submit" class="btn btn-primary mx-auto d-block" value="Reset Pass">
                                            </input>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('vendors/@coreui/coreui/js/coreui.bundle.min.js')}}"></script>
    <script src="{{ asset('vendors/simplebar/js/simplebar.min.js')}}"></script>
    <script>
    </script>

</body>

</html>