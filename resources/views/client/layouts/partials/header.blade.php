<header class="header header-sticky" id="header">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-between">
            <div class="t_flex t_container header_wrapper">
                <div class="menu_mobile">
                    <div class="icon_open_nav">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66667 10C1.66667 9.53977 2.03976 9.16667 2.5 9.16667H17.5C17.9602 9.16667 18.3333 9.53977 18.3333 10C18.3333 10.4602 17.9602 10.8333 17.5 10.8333H2.5C2.03976 10.8333 1.66667 10.4602 1.66667 10Z" fill="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66667 5C1.66667 4.53976 2.03976 4.16666 2.5 4.16666H17.5C17.9602 4.16666 18.3333 4.53976 18.3333 5C18.3333 5.46023 17.9602 5.83333 17.5 5.83333H2.5C2.03976 5.83333 1.66667 5.46023 1.66667 5Z" fill="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M1.66667 15C1.66667 14.5398 2.03976 14.1667 2.5 14.1667H17.5C17.9602 14.1667 18.3333 14.5398 18.3333 15C18.3333 15.4602 17.9602 15.8333 17.5 15.8333H2.5C2.03976 15.8333 1.66667 15.4602 1.66667 15Z" fill="black" />
                        </svg>
                    </div>
                    <div id="navbar" class="t_nav nav_open_menu">
                        <div class="nav_open_menu_content ">
                            <div class="t_flex menu_bar">
                                <div class="logo_menu_bar">
                                    <img src="/assets/img/logo_bravo.png">
                                </div>
                                <div class="icon_close_menu">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="30" height="30" rx="15" fill="#F7FAFE" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M20.5893 9.41074C20.9147 9.73618 20.9147 10.2638 20.5893 10.5893L10.5893 20.5893C10.2638 20.9147 9.7362 20.9147 9.41076 20.5893C9.08533 20.2638 9.08533 19.7362 9.41076 19.4107L19.4108 9.41074C19.7362 9.0853 20.2638 9.0853 20.5893 9.41074Z" fill="black" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.41076 9.41074C9.7362 9.0853 10.2638 9.0853 10.5893 9.41074L20.5893 19.4107C20.9147 19.7362 20.9147 20.2638 20.5893 20.5893C20.2638 20.9147 19.7362 20.9147 19.4108 20.5893L9.41076 10.5893C9.08533 10.2638 9.08533 9.73618 9.41076 9.41074Z" fill="black" />
                                    </svg>
                                </div>
                            </div>
                            <div class="menu_body">
                                <ul>
                                    <li class="level1">
                                        <a href="/">{{ __('message.home') }}</a>
                                    </li>
                                    <li class="level1">
                                        <div class="sub_menutitle">
                                            <a href="/about-us">{{ __('message.about') }}</a>
                                            <div class="arrow">
                                                <svg width="10" height="7" viewBox="0 0 10 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.528575 1.02859C0.788925 0.768241 1.21103 0.768241 1.47138 1.02859L4.99998 4.55719L8.52858 1.02859C8.78893 0.768241 9.21103 0.768241 9.47138 1.02859C9.73173 1.28894 9.73173 1.71105 9.47138 1.9714L5.47138 5.9714C5.21103 6.23175 4.78892 6.23175 4.52858 5.9714L0.528575 1.9714C0.268226 1.71105 0.268226 1.28894 0.528575 1.02859Z" fill="white" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.528575 1.02859C0.788925 0.768241 1.21103 0.768241 1.47138 1.02859L4.99998 4.55719L8.52858 1.02859C8.78893 0.768241 9.21103 0.768241 9.47138 1.02859C9.73173 1.28894 9.73173 1.71105 9.47138 1.9714L5.47138 5.9714C5.21103 6.23175 4.78892 6.23175 4.52858 5.9714L0.528575 1.9714C0.268226 1.71105 0.268226 1.28894 0.528575 1.02859Z" fill="#1D3F92" fill-opacity="0.6" />
                                                </svg>
                                            </div>
                                        </div>
                                        <ul class="sub_menu">
                                            <li class="level2">
                                                <a href="/about-us/office">{{ __('message.office') }}</a>
                                            </li>
                                            <li class="level2">
                                                <a href="/about-us/member">{{ __('message.member') }}</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1">
                                        <a href="/article">{{ __('message.news') }}</a>
                                    </li>
                                    <li class="level1">
                                        <a href="/career">{{ __('message.careers') }}</a>
                                    </li>
                                    <li class="level1">
                                        <a href="/contact-us">{{ __('message.contact') }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <h1 class="logo_header">
                    <a href="/">
                        <img src="/assets/img/logo_bravo.png">
                    </a>
                </h1>
                <div class="menu_wrapper">
                    <ul class="t_nav menu_desk">
                        <li class="level1 {{ request()->is('/') ? 'active' : '' }} ">
                            <a class="link_lv1" href="/">{{ __('message.home') }}</a>
                        </li>
                        <li class="level1 has_submenu {{ request()->is('about-us*') ? 'active' : '' }}">
                            <div class="sub_menu_title toggle">
                                <a class="link_lv1" href="/about-us">{{ __('message.about') }}</a>
                                <div class="icon">
                                    <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.873485 0.52859C1.13383 0.268241 1.55594 0.268241 1.81629 0.52859L5.34489 4.05719L8.87349 0.52859C9.13383 0.268241 9.55594 0.268241 9.81629 0.52859C10.0766 0.78894 10.0766 1.21105 9.81629 1.4714L5.81629 5.4714C5.55594 5.73175 5.13383 5.73175 4.87349 5.4714L0.873485 1.4714C0.613135 1.21105 0.613135 0.78894 0.873485 0.52859Z" fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.873485 0.52859C1.13383 0.268241 1.55594 0.268241 1.81629 0.52859L5.34489 4.05719L8.87349 0.52859C9.13383 0.268241 9.55594 0.268241 9.81629 0.52859C10.0766 0.78894 10.0766 1.21105 9.81629 1.4714L5.81629 5.4714C5.55594 5.73175 5.13383 5.73175 4.87349 5.4714L0.873485 1.4714C0.613135 1.21105 0.613135 0.78894 0.873485 0.52859Z" fill="currentColor" fill-opacity="0.6" />
                                    </svg>
                                </div>
                            </div>
                            <ul class="sub_menu">
                                <li class="{{ request()->is('about-us/office') ? 'active' : '' }}">
                                    <a href="/about-us/office">{{ __('message.office') }}</a>
                                </li>
                                <li class="{{ request()->is('about-us/member') ? 'active' : '' }}">
                                    <a href="/about-us/member">{{ __('message.member') }}</a>
                                </li>
                            </ul>
                        </li>
                        <li class="level1 {{ request()->is('article*') ? 'active' : '' }}">
                            <a class="link_lv1 " href="/article">{{ __('message.news') }}</a>
                        </li>
                        <li class="level1 {{ request()->is('career*') ? 'active' : '' }}">
                            <a class="link_lv1 " href="/career">{{ __('message.careers') }}</a>
                        </li>
                        <li class="level1 {{ request()->is('contact-us') ? 'active' : '' }}">
                            <a class="link_lv1 " href="/contact-us">{{ __('message.contact') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="languages">
                    <div class="t_flex language_title">
                        <div class="name">
                            <a href="javascript:{0}">{{ app()->getLocale() == 'vi' ? __('message.vi') : __('message.en') }}</a>
                        </div>
                        <div class="arrow">
                            <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7 5.58579L12.2929 0.292893C12.6834 -0.0976311 13.3166 -0.0976311 13.7071 0.292893C14.0976 0.683417 14.0976 1.31658 13.7071 1.70711L7.70711 7.70711C7.31658 8.09763 6.68342 8.09763 6.29289 7.70711L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7 5.58579L12.2929 0.292893C12.6834 -0.0976311 13.3166 -0.0976311 13.7071 0.292893C14.0976 0.683417 14.0976 1.31658 13.7071 1.70711L7.70711 7.70711C7.31658 8.09763 6.68342 8.09763 6.29289 7.70711L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="#1D3F92" fill-opacity="0.6" />
                            </svg>
                        </div>
                    </div>
                    <div class="list_language_modal">
                        <ul>
                            <li class="item_modal">
                                @if (app()->getLocale() == 'vi')
                                    <a href="/language/en">{{ __('message.en') }}</a>
                                @else 
                                    <a href="/language/vi">{{ __('message.vi') }}</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>