@extends('client.layout.layout') @section('content')
<main role="main" id="MainContent">
    <div class="header-bg">
        <div class="t_flex t_container hero_banner">
            <div class="t_flex banner_content">
                <h2 class="heading">{{ __('message.hello_world')}}</h2>
                <p class="message">{{ __('message.home_description')}}</p>
                <a href="{{ route('about') }}">
                    <button class="t_flex t_button button_banner" type="button">
                            <span class="text">{{ __('message.home_about')}}</span>
                            <span class="icon">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white"/>
                                </svg>                                
                            </span>
                        </button>
                </a>
            </div>
            <div class="banner_image">
                <img src="{{ asset('assets/img_client/layout/2022-06-09-03-20-03-helloworld-sonatwebsite-2-1.png')}}">
            </div>
        </div>
    </div>


    <div class="featuared_list">
        <div class="t_container featuared_list_wrraper">
            <div class="featured_list_heading">
                <h2 class="heading">
                    {{ __('message.home_heading')}}
                </h2>
                <p class="message">{{ __('message.home_heading_message')}}</p>
            </div>
            <div class="t_flex featured_list_content">
                <div class="item_wrapper">
                    <div class="item">
                        <div class="item_content">
                            <div class="item_wp">
                                <div class="icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="48" height="48" rx="24" fill="white"/>
                                            <rect width="48" height="48" rx="24" fill="#1D3F92"/>
                                            <path d="M36.4964 17.8178C23.4218 36.813 27.8976 17.4538 16.8446 26.7176L19.3576 36.6002H16.531L11.4 16.4262L13.99 15.4966C26.3786 6.43724 19.9092 23.6446 35.8818 17.2522C36.3914 17.0464 36.7988 17.3782 36.4964 17.8178Z" fill="white"/>
                                        </svg>
                                </div>
                                <h3 class="title">
                                     {{ __('message.home_title_vision')}}
                                </h3>
                                <div class="message">
                                    {{ __('message.home_title_vision_message')}}
                                </div>
                                <a href="{{ route('about') }}#our_vison" class="see_more">
                                    <span class="text">{{ __('message.btn_member_bravo')}}</span>
                                    <span class="see_more_icon">
                                            <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.910765 0.910704C1.2362 0.585267 1.76384 0.585267 2.08928 0.910704L7.08928 5.9107C7.41471 6.23614 7.41471 6.76378 7.08928 7.08922L2.08928 12.0892C1.76384 12.4147 1.2362 12.4147 0.910765 12.0892C0.585328 11.7638 0.585328 11.2361 0.910765 10.9107L5.32151 6.49996L0.910765 2.08922C0.585328 1.76378 0.585328 1.23614 0.910765 0.910704Z" fill="white"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.910765 0.910704C1.2362 0.585267 1.76384 0.585267 2.08928 0.910704L7.08928 5.9107C7.41471 6.23614 7.41471 6.76378 7.08928 7.08922L2.08928 12.0892C1.76384 12.4147 1.2362 12.4147 0.910765 12.0892C0.585328 11.7638 0.585328 11.2361 0.910765 10.9107L5.32151 6.49996L0.910765 2.08922C0.585328 1.76378 0.585328 1.23614 0.910765 0.910704Z" fill="#1D3F92"/>
                                            </svg>                            
                                        </span>
                                </a>
                            </div>
                        </div>
                        <div class="bg_image img1"></div>
                    </div>
                </div>
                <div class="item_wrapper">
                    <div class="item">
                        <div class="item_content">
                            <div class="item_wp">
                                <div class="icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="48" height="48" rx="24" fill="white"/>
                                            <rect width="48" height="48" rx="24" fill="#1D3F92"/>
                                            <path d="M32.6935 12.9414L12.4132 24.6378C11.6212 25.0927 11.7219 26.195 12.5095 26.5274L17.1606 28.4782L29.7313 17.403C29.972 17.1886 30.3132 17.5167 30.1076 17.766L19.5671 30.6041V34.1252C19.5671 35.1575 20.8141 35.5643 21.4267 34.8163L24.2051 31.4351L29.6569 33.7184C30.2782 33.9809 30.9871 33.5916 31.1008 32.9223L34.2512 14.0261C34.3999 13.1426 33.4504 12.504 32.6935 12.9414Z" fill="white"/>
                                        </svg>
                                </div>
                                <h3 class="title">
                                     {{ __('message.home_title_mission')}}
                                </h3>
                                <div class="message">
                                    {{ __('message.home_title_mission_message')}}
                                </div>
                                <a href="{{ route('about') }}#our_mission" class="see_more">
                                    <span class="text">{{ __('message.btn_member_bravo')}}</span>
                                    <span class="see_more_icon">
                                            <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.910765 0.910704C1.2362 0.585267 1.76384 0.585267 2.08928 0.910704L7.08928 5.9107C7.41471 6.23614 7.41471 6.76378 7.08928 7.08922L2.08928 12.0892C1.76384 12.4147 1.2362 12.4147 0.910765 12.0892C0.585328 11.7638 0.585328 11.2361 0.910765 10.9107L5.32151 6.49996L0.910765 2.08922C0.585328 1.76378 0.585328 1.23614 0.910765 0.910704Z" fill="white"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.910765 0.910704C1.2362 0.585267 1.76384 0.585267 2.08928 0.910704L7.08928 5.9107C7.41471 6.23614 7.41471 6.76378 7.08928 7.08922L2.08928 12.0892C1.76384 12.4147 1.2362 12.4147 0.910765 12.0892C0.585328 11.7638 0.585328 11.2361 0.910765 10.9107L5.32151 6.49996L0.910765 2.08922C0.585328 1.76378 0.585328 1.23614 0.910765 0.910704Z" fill="#1D3F92"/>
                                            </svg>                            
                                        </span>
                                </a>
                            </div>
                        </div>
                        <div class="bg_image img2"></div>
                    </div>
                </div>
                <div class="item_wrapper">
                    <div class="item">
                        <div class="item_content">
                            <div class="item_wp">
                                <div class="icon">
                                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="48" height="48" rx="24" fill="white"/>
                                            <rect width="48" height="48" rx="24" fill="#1D3F92"/>
                                            <path d="M24.0005 10.5579C16.5777 10.5579 10.5605 16.5751 10.5605 23.9979C10.5605 31.4207 16.5777 37.4379 24.0005 37.4379C31.4219 37.4379 37.4405 31.4207 37.4405 23.9965C37.4405 16.5751 31.4219 10.5579 24.0005 10.5579ZM24.0005 34.6365C18.1247 34.6365 13.3605 29.8737 13.3605 23.9965C13.3605 18.1193 18.1233 13.3579 24.0005 13.3579C29.8763 13.3579 34.6419 18.1207 34.6419 23.9979C34.6419 29.8751 29.8763 34.6365 24.0005 34.6365ZM20.5019 23.6479C21.6611 23.6479 22.6005 22.5517 22.6005 21.1979C22.6005 19.8441 21.6597 18.7479 20.5005 18.7479C19.3413 18.7479 18.4005 19.8441 18.4005 21.1979C18.4005 22.5517 19.3413 23.6479 20.5019 23.6479ZM27.5005 23.6479C28.6611 23.6479 29.6005 22.5517 29.6005 21.1979C29.6005 19.8441 28.6597 18.7479 27.5005 18.7479C26.3413 18.7479 25.4005 19.8455 25.4005 21.1979C25.4005 22.5503 26.3413 23.6479 27.5005 23.6479ZM30.0779 25.8683C29.5697 25.6079 28.9369 25.8081 28.6667 26.3163C28.6191 26.4087 27.4501 28.5465 24.0019 28.5465C20.5705 28.5465 19.3945 26.4283 19.3357 26.3177C19.0725 25.8067 18.4509 25.5981 17.9301 25.8571C17.4121 26.1175 17.2021 26.7475 17.4611 27.2669C17.5311 27.4055 19.2083 30.6465 24.0019 30.6465C28.7969 30.6465 30.4713 27.4041 30.5399 27.2655C30.7975 26.7517 30.5903 26.1315 30.0779 25.8683Z" fill="white"/>
                                        </svg>
                                </div>
                                <h3 class="title">
                                    {{ __('message.home_title_core')}}
                                </h3>
                                <div class="message">
                                    {{ __('message.home_title_core_message')}}
                                </div>
                                <a href="{{ route('about') }}#contact_us_core_value" class="see_more">
                                    <span class="text">{{ __('message.btn_member_bravo')}}</span>
                                    <span class="see_more_icon">
                                            <svg width="8" height="13" viewBox="0 0 8 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.910765 0.910704C1.2362 0.585267 1.76384 0.585267 2.08928 0.910704L7.08928 5.9107C7.41471 6.23614 7.41471 6.76378 7.08928 7.08922L2.08928 12.0892C1.76384 12.4147 1.2362 12.4147 0.910765 12.0892C0.585328 11.7638 0.585328 11.2361 0.910765 10.9107L5.32151 6.49996L0.910765 2.08922C0.585328 1.76378 0.585328 1.23614 0.910765 0.910704Z" fill="white"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.910765 0.910704C1.2362 0.585267 1.76384 0.585267 2.08928 0.910704L7.08928 5.9107C7.41471 6.23614 7.41471 6.76378 7.08928 7.08922L2.08928 12.0892C1.76384 12.4147 1.2362 12.4147 0.910765 12.0892C0.585328 11.7638 0.585328 11.2361 0.910765 10.9107L5.32151 6.49996L0.910765 2.08922C0.585328 1.76378 0.585328 1.23614 0.910765 0.910704Z" fill="#1D3F92"/>
                                            </svg>                            
                                        </span>
                                </a>
                            </div>
                        </div>
                        <div class="bg_image img3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="infos">
        <div class="t_container infos_wrapper">
            <div class="t_flex infos_title">
                <div class="heading">
                    <h3> {{ __('message.home_info_heading')}}</h3>
                </div>

                <p class="message">{{ __('message.home_info_message')}}</p>
            </div>
            <div class="t_flex infos_content">
                <div class="t_flex item">
                    <div class="number"><span class="count" data-count="120">120</span>M+</div>
                    <div class="message">{{ __('message.downloads')}}</div>
                </div>
                <div class="t_flex item">
                    <div class="number"><span class="count" data-count="25">25</span>M+</div>
                    <div class="message">{{ __('message.subscribed')}}</div>
                </div>
                <div class="t_flex item">
                    <div class="number"><span class="count" data-count="4">4</span>M+</div>
                    <div class="message">{{ __('message.daily')}}</div>
                </div>
            </div>
        </div>
    </div>


    <div class="core_value_wrapper">
        <div class="t_container core_value">
            <div class="title">
                <h3 class="heading">{{ __('message.home_coreValue_heading')}}</h3>
                <p class="message">{{ __('message.home_coreValue_message')}}</p>
            </div>
            <div class="t_flex value_content">
                <div class="content_left">
                    <img src="{{ asset('assets/img_client/layout/2022-04-05-10-07-17-yep.jpg')}}">
                </div>
                <div class="conternt_right">
                    <div class="image_above">
                        <img src="{{ asset('assets/img_client/layout/2022-05-04-10-04-47-resize-anh-vp-moi.png')}}">
                    </div>
                    <div class="image_below">
                        <img src="{{ asset('assets/img_client/layout/2022-05-04-09-06-03-view-phong-hop-2.png')}}">
                    </div>
                    <a href="{{ route('post', ['type' => 'member']) }}">
                        <button class="t_flex t_button button_banner" type="button">
                                <span class="text">{{ __('message.home_about')}}</span>
                                <span class="icon">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white"/>
                                    </svg>                                
                                </span>
                            </button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="our_team">
        <div class="t_container t_flex our_team_wrapper">
            <div class="content_left">
                <div class="heading">
                    Be creative
                </div>
                <div class="message">
                {{ __('message.home_our_team_message')}}
                </div>
                <a class="button_desk"  href="{{ route('recruitment.index') }}">
                    <button class="t_flex t_button button_banner " type="button">
                            <span class="text">Tham gia cùng chúng tôi</span>
                        </button>
                </a>
            </div>
            <div class="content_right">
                <div class="title">{{ __('message.home_our_team_title')}}</div>
                <div class="t_flex blocks">
                    <div class="item">
                        <ul>
                            <li>
                                <a href="javascript:void(0)">PRODUCTION</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">GAME DESIGN</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">ART & ANIMATION</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">PROGRAMMING</a>
                            </li>

                        </ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li>
                                <a href="javascript:void(0)">MARKETING</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">GRAPHICS & VIDEO</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">DATA ANALYST</a>
                            </li>
                        </ul>
                    </div>
                    <div class="item">
                        <ul>
                            <li>
                                <a href="javascript:void(0)">FINANCE & ACCOUNTING</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">HUMAN RESOUCES</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <a class="button_mobile" href="people.html">
                    <button class="t_flex t_button button_banner " type="button">
                            <span class="text">Tham gia cùng chúng tôi</span>
                        </button>
                </a>
            </div>

        </div>
        <div class="child"></div>
    </div>
</main>
@endsection