@php
    use Illuminate\Support\Facades\App;
@endphp
<!DOCTYPE html>
<html class="no-js" lang="vi">

<!-- Mirrored from sonat.vn/career by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 02:52:05 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>090Bravo</title>
    <meta name="description" content="Sonat Game">
    <meta name="keywords" content="Sonat Game">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="about-us/index.html">
    <link rel="alternate" href="about-us/index.html" hreflang="vi-vn">
    <meta itemprop="name" content="Sonat Game">
    <meta itemprop="description" content="Sonat Game">
    <meta property="og:title" content="Sonat Game">
    <meta property="og:locale" content="vi_VN">
    <meta property="og:type" content="website">
    <meta property="og:url" content="about-us/index.html">
    <meta property="og:description" content="Sonat Game">
    <meta property="og:site_name" content="SonatGame">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="{{ asset('assets/img_client/layout/logo1.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/theme3d82.css?1683168695') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/custom3d82.css?1683168695') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <script src="{{ asset('js/modernizr.custom.js') }}"></script>
</head>

<body>

    <div class="page pg-home">
            <header class="header header-sticky" id="header">
                <div class="container-fluid  container-header">
                    <div class="row align-items-center justify-content-between">
                        <div class="t_flex t_container header_wrapper">
                            <div class="menu_mobile">
                                <div class="icon_open_nav">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66667 10C1.66667 9.53977 2.03976 9.16667 2.5 9.16667H17.5C17.9602 9.16667 18.3333 9.53977 18.3333 10C18.3333 10.4602 17.9602 10.8333 17.5 10.8333H2.5C2.03976 10.8333 1.66667 10.4602 1.66667 10Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66667 5C1.66667 4.53976 2.03976 4.16666 2.5 4.16666H17.5C17.9602 4.16666 18.3333 4.53976 18.3333 5C18.3333 5.46023 17.9602 5.83333 17.5 5.83333H2.5C2.03976 5.83333 1.66667 5.46023 1.66667 5Z" fill="black"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66667 15C1.66667 14.5398 2.03976 14.1667 2.5 14.1667H17.5C17.9602 14.1667 18.3333 14.5398 18.3333 15C18.3333 15.4602 17.9602 15.8333 17.5 15.8333H2.5C2.03976 15.8333 1.66667 15.4602 1.66667 15Z" fill="black"/>
                    </svg>
                                </div>
                                <div id="navbar" class="t_nav nav_open_menu">
                                    <div class="nav_open_menu_content ">
                                        <div class="t_flex menu_bar">
                                            <div class="logo_menu_bar">
                                                <img src="{{ asset('assets/img_client/layout/logo.png') }}">
                                            </div>
                                            <div class="icon_close_menu">
                                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="30" height="30" rx="15" fill="#F7FAFE"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5893 9.41074C20.9147 9.73618 20.9147 10.2638 20.5893 10.5893L10.5893 20.5893C10.2638 20.9147 9.7362 20.9147 9.41076 20.5893C9.08533 20.2638 9.08533 19.7362 9.41076 19.4107L19.4108 9.41074C19.7362 9.0853 20.2638 9.0853 20.5893 9.41074Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.41076 9.41074C9.7362 9.0853 10.2638 9.0853 10.5893 9.41074L20.5893 19.4107C20.9147 19.7362 20.9147 20.2638 20.5893 20.5893C20.2638 20.9147 19.7362 20.9147 19.4108 20.5893L9.41076 10.5893C9.08533 10.2638 9.08533 9.73618 9.41076 9.41074Z" fill="black"/>
                                </svg>
                                            </div>
                                        </div>
                                        <div class="menu_body">
                                            <ul>
                                                <li class="level1 {{ request()->segment(1) === 'null' ? 'active' : '' }}">
                                                    <a href="{{ route('index_home') }}">{{ __('message.home') }}</a>
                                                </li>
                                                <li class="level1 {{ request()->segment(1) === 'post' ? 'active' : '' }}">
                                                    <div class="sub_menutitle">
                                                        <a href="{{ route('about') }}">{{ __('message.about') }}</a>
                                                        <div class="arrow">
                                                            <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.528575 1.02859C0.788925 0.768241 1.21103 0.768241 1.47138 1.02859L4.99998 4.55719L8.52858 1.02859C8.78893 0.768241 9.21103 0.768241 9.47138 1.02859C9.73173 1.28894 9.73173 1.71105 9.47138 1.9714L5.47138 5.9714C5.21103 6.23175 4.78892 6.23175 4.52858 5.9714L0.528575 1.9714C0.268226 1.71105 0.268226 1.28894 0.528575 1.02859Z" fill="white"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.528575 1.02859C0.788925 0.768241 1.21103 0.768241 1.47138 1.02859L4.99998 4.55719L8.52858 1.02859C8.78893 0.768241 9.21103 0.768241 9.47138 1.02859C9.73173 1.28894 9.73173 1.71105 9.47138 1.9714L5.47138 5.9714C5.21103 6.23175 4.78892 6.23175 4.52858 5.9714L0.528575 1.9714C0.268226 1.71105 0.268226 1.28894 0.528575 1.02859Z" fill="#1D3F92" fill-opacity="0.6"/>
                                            </svg>
                                                        </div>
                                                    </div>
                                                    <ul class="sub_menu">
                                                        <li class="level2">
                                                            <a href="{{ route('post',['type' => 'office']) }}">{{ __('message.office') }}</a>
                                                        </li>
                                                        <li class="level2">
                                                            <a href="{{ route('post',['type' => 'member']) }}">{{ __('message.member') }}</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="level1 {{ request()->segment(1) === 'post' ? 'active' : '' }}">
                                                    <a href="{{ route('blog.index') }}">{{ __('message.news') }}</a>
                                                </li>
                                                <li class="level1 {{ request()->segment(1) === null ? 'active' : '' }}">
                                                    <a href="{{ route('recruitment.index') }}">{{ __('message.careers') }}</a>
                                                </li>
                                                <li class="level1 {{ request()->segment(1) === 'contact' ? 'active' : '' }}">
                                                    <a href="{{ route('index_contact') }}">{{ __('message.contact') }}</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <h1 class="logo_header">
                                <a href="{{ route('index_home') }}">
                                    <img src="{{ asset('assets/img_client/layout/logo.png') }}">
                                </a>
                            </h1>
                            <div class="menu_wrapper">
                                <ul class="t_nav menu_desk">
                                    <li class="level1 {{ request()->segment(1) === null ? 'active' : '' }} ">
                                        <a class="link_lv1 " href="{{ route('index_home') }}">{{ __('message.home') }}</a>
                                    </li>
                                    <li class="level1 has_submenu  {{ request()->segment(1) === 'post' ? 'active' : '' }}     ">
                                        <div class="sub_menu_title toggle">
                                            <a class="link_lv1" href="{{ route('about') }}">{{ __('message.about') }}</a>
                                            <div class="icon">
                                                <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.873485 0.52859C1.13383 0.268241 1.55594 0.268241 1.81629 0.52859L5.34489 4.05719L8.87349 0.52859C9.13383 0.268241 9.55594 0.268241 9.81629 0.52859C10.0766 0.78894 10.0766 1.21105 9.81629 1.4714L5.81629 5.4714C5.55594 5.73175 5.13383 5.73175 4.87349 5.4714L0.873485 1.4714C0.613135 1.21105 0.613135 0.78894 0.873485 0.52859Z" fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.873485 0.52859C1.13383 0.268241 1.55594 0.268241 1.81629 0.52859L5.34489 4.05719L8.87349 0.52859C9.13383 0.268241 9.55594 0.268241 9.81629 0.52859C10.0766 0.78894 10.0766 1.21105 9.81629 1.4714L5.81629 5.4714C5.55594 5.73175 5.13383 5.73175 4.87349 5.4714L0.873485 1.4714C0.613135 1.21105 0.613135 0.78894 0.873485 0.52859Z" fill="currentColor" fill-opacity="0.6"/>
                                </svg>
                                            </div>
                                        </div>
                                        <ul class="sub_menu">
                                            <li class="">
                                                <a href="{{ route('post', ['type' => 'office']) }}">{{ __('message.office') }}</a>
                                            </li>
                                            <li class="">
                                                <a href="{{ route('post', ['type' => 'member']) }}">{{ __('message.member') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 {{ request()->segment(1) === 'blog' ? 'active' : '' }}">
                                        <a class="link_lv1 " href="{{ route('blog.index') }}">{{ __('message.news') }}</a>
                                    </li>
                                    <li class="level1 {{ request()->segment(1) === 'recruitment' ? 'active' : '' }} ">
                                        <a class="link_lv1" href="{{ route('recruitment.index') }}">{{ __('message.careers') }}</a>
                                    </li>
                                    <li class="level1 {{ request()->segment(1) === 'contact' ? 'active' : '' }}">
                                        <a class="link_lv1 "href="{{ route('index_contact') }}">{{ __('message.contact') }}</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="languages">
                                <div class="t_flex language_title">
                                    <div class="name">
                                        @if(App::getLocale() === 'vi')
                                        <a href="{!! route('user.change-language', ['vi']) !!}">Tiếng Việt</a> 
                                        @else
                                        <a href="{!! route('user.change-language', ['en']) !!}">English</a>
                                        @endif
                                    </div>
                                    <div class="arrow">
                                        <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7 5.58579L12.2929 0.292893C12.6834 -0.0976311 13.3166 -0.0976311 13.7071 0.292893C14.0976 0.683417 14.0976 1.31658 13.7071 1.70711L7.70711 7.70711C7.31658 8.09763 6.68342 8.09763 6.29289 7.70711L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7 5.58579L12.2929 0.292893C12.6834 -0.0976311 13.3166 -0.0976311 13.7071 0.292893C14.0976 0.683417 14.0976 1.31658 13.7071 1.70711L7.70711 7.70711C7.31658 8.09763 6.68342 8.09763 6.29289 7.70711L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="#1D3F92" fill-opacity="0.6"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="list_language_modal">
                                    <ul>
                                        <li class="item_modal">
                                            @if(App::getLocale() === 'vi')
                                            <a href="{!! route('user.change-language', ['en']) !!}">English</a>                                     
                                            @else
                                            <a href="{!! route('user.change-language', ['vi']) !!}">Tiếng Việt</a> 
                                            @endif
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="page-main">
                @yield('content')
            </div>
            <footer class="footer" id="footer">
                <div class="container">
                    <div class="footer_wrapper">
                        <div class="t_container t_flex footer_content">
                            <div class="t_flex footer_above">
                                <div class="t_flex social_media">
                                    <div class="t_flex social_icon_content">
                                        <div class="title">{{ __('message.follow') }}</div>
                                        <div class="t_flex social_icon">
                                            <a href="https://www.facebook.com/SonatGameStudio/">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.9976 0.637695C7.51437 0.637695 0.637573 7.51449 0.637573 15.9977C0.637573 24.4809 7.51437 31.3577 15.9976 31.3577C24.4808 31.3577 31.3576 24.4809 31.3576 15.9977C31.3576 7.51449 24.4808 0.637695 15.9976 0.637695ZM19.636 11.2521H17.3272C17.0536 11.2521 16.7496 11.6121 16.7496 12.0905V13.7577H19.6376L19.2008 16.1353H16.7496V23.2729H14.0248V16.1353H11.5528V13.7577H14.0248V12.3593C14.0248 10.3529 15.4168 8.72249 17.3272 8.72249H19.636V11.2521Z" fill="white"/>
                                    </svg>
                                            </a>
                                            <a href="https://www.youtube.com/channel/UCyzRC1r64gkk2BAiSWMtiwA">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M18.5624 15.7305L14.9688 14.0537C14.6552 13.9081 14.3976 14.0713 14.3976 14.4185V17.5769C14.3976 17.9241 14.6552 18.0873 14.9688 17.9417L18.5608 16.2649C18.876 16.1177 18.876 15.8777 18.5624 15.7305ZM15.9976 0.637695C7.51437 0.637695 0.637573 7.51449 0.637573 15.9977C0.637573 24.4809 7.51437 31.3577 15.9976 31.3577C24.4808 31.3577 31.3576 24.4809 31.3576 15.9977C31.3576 7.51449 24.4808 0.637695 15.9976 0.637695ZM15.9976 22.2377C8.13517 22.2377 7.99757 21.5289 7.99757 15.9977C7.99757 10.4665 8.13517 9.75769 15.9976 9.75769C23.86 9.75769 23.9976 10.4665 23.9976 15.9977C23.9976 21.5289 23.86 22.2377 15.9976 22.2377Z" fill="white"/>
                                    </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="trustbadge_img">
                                        <img src="{{ asset('assets/img_client/layout/trustbadge-img.png') }}">
                                    </div>
                                </div>
                                <div class="t_flex menu_footer">
                                    <div class="box_menu box_menu_2">
                                        <div class="title">{{ __('message.company') }}</div>
                                        <ul class="menu_nav">
                                            <li>
                                                <a href="about-us.html">
                                                    <span class="text">{{ __('message.home') }}</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="career.html">
                                                    <span class="text">{{ __('message.careers') }}</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="contact-us.html">
                                                    <span class="text">{{ __('message.contact') }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="box_menu box_menu_3">
                                        <div class="title">{{ __('message.policy') }}</div>
                                        <ul class="menu_nav">
                                            <li>
                                                <a href="policy.html">
                                                    <span class="text">{{ __('message.policy') }}</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="t_flex button_back_to_top">
                                    <span class="icon_btt">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5893 7.57758C14.2639 7.25214 13.7362 7.25214 13.4108 7.57758L7.57745 13.4109C7.25202 13.7363 7.25202 14.264 7.57745 14.5894C7.90289 14.9149 8.43053 14.9149 8.75596 14.5894L13.1667 10.1787V19.8335C13.1667 20.2937 13.5398 20.6668 14 20.6668C14.4603 20.6668 14.8334 20.2937 14.8334 19.8335V10.1787L19.2441 14.5894C19.5696 14.9149 20.0972 14.9149 20.4226 14.5894C20.7481 14.264 20.7481 13.7363 20.4226 13.4109L14.5893 7.57758Z" fill="white"/>
                                <rect x="0.5" y="0.5" width="27" height="27" rx="13.5" stroke="white"/>
                            </svg>                                
                        </span>
                                    <span class="text">Trở về đầu</span>
                                </div>
                            </div>
                            <div class="t_flex footer_below">
                                <div class="logo_footer">
                                    <img src="{{ asset('assets/img_client/layout/logo-footer.png') }}">
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </footer>
    </div>



    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/theme.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/toastr.min3d82.js?1683168695') }}"></script>

    <script type="text/javascript">
        $(function() {
            toastr.options = {
                "debug": false,
                "positionClass": "toast-top-right",
                "onclick": null,
                "fadeIn": 300,
                "fadeOut": 1000,
                "timeOut": 5000,
                "extendedTimeOut": 1000
            };
        });
    </script>
</body>

<!-- Mirrored from sonat.vn/career by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 May 2023 02:52:26 GMT -->

</html>