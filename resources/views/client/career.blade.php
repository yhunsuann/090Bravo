@extends('client.layouts.master')

@section('content')
    <main role="main" id="MainContent">
        <div class="hero_banner1 on_about_people_page on_careers_page">
            <div class="t_container t_flex banner_content">
                <h2 class="heading">{{ __('message.careers') }}</h2>
                <div class="message"> {{ __('message.careers_lable') }} </div>
            </div>
        </div>
        <div class="find_more_jobs">
            <div class="t_container find_more_job_wrapper">
                <div class="title">
                    <div class="heading">{{ __('message.careers_title') }}</div>
                    <div class="message">{{ __('message.careers_description') }}</div>
                </div>
                <div class="more_jobs_content">
                    <div class="owl-carousel owl-theme slide_items">
                        @foreach($careers as $key => $career)
                            <div class="item_wrapper">
                                <div class="item">
                                    <div class="content_item">
                                        <a href="/career/{{ $career->id }}" class="desc">
                                            <div class="heading">{{ $career->title }}</div>
                                            <div class="message">{{ $career->description }}</div>
                                        </a>
                                    </div>
                                    <div class="t_line"></div>
                                    <a href="/career/{{ $career->id }}" class="t_flex see_more">
                                        <span class="text">{{ __('message.read_more') }}</span>
                                        <span class="icon">
                                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white" />
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="about_us_hero_banner career-hot">
            <img src="/client/backend/uploads/products/thumbs/2022-05-10-03-29-32-banner.png">
            <div class="t_container t_flex banner_content">
                <h2 class="heading">MARKETING INTERNSHIP PROGRAM</h2>
                <div class="message">
                    <p>{{ __('message.content_intership_program') }}</p>
                    <div data-cke-hidden-sel="1" data-cke-temp="1" style="position:fixed;top:0;left:-1000px">ảnh widget</div>
                </div>
                <a href="/contact-us">
                    <button class="t_flex t_button button_banner" type="button">
                        <span class="text">{{ __('message.btn_intership_program') }}</span>
                    </button>
                </a>
            </div>
        </div>
        <!-- <div class="banner" style="background-image:url('/backend/uploads/products/thumbs/2022-05-10-03-29-32-banner.png')"><div class="t_container t_flex banner_wrapper"><div class="heading">MARKETING INTERNSHIP PROGRAM</div><div class="message"><p>​​​​​​​​​​​​​​Cơ hội trở thành Marketer tại Top 1 Puzzle Game Studio Việt Nam</p><div data-cke-hidden-sel="1" data-cke-temp="1" style="position:fixed;top:0;left:-1000px">ảnh widget</div></div><a href="https://sonat.vn/c/internship-program-16509403"><button class="t_flex t_button button_banner" type="button"><span class="text">Tham gia cùng chúng tôi</span></button></a></div></div> -->
        <div class="our_vison our_people">
            <div class="t_container t_flex our_vison_wrapper">
                <div class="t_flex content_left">
                    <div class="heading">{{ __('message.member_bravo') }}</div>
                    <div class="message">
                        {!! $trans['member_info'] ?? '' !!}
                    </div>
                    <a href="/about-us/member">
                        <button class="t_flex t_button button_banner" type="button">
                            <span class="text">{{ __('message.read_more') }}</span>
                            <span class="icon">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white" />
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>
                <div class="content_right">
                    <img src="/assets/img/contact/{{ $trans['image_member'] ?? '' }}">
                </div>
            </div>
        </div>
        <div class="our_mission careers_our_cultural">
            <div class="t_container t_flex our_mission_wrapper">
                <div class="t_flex content_left">
                    <div class="heading">{{ __('message.culture') }}</div>
                    <div class="message"> 
                        {!! $trans['culture_info'] ?? '' !!}
                    </div>
                    <a href="/about-us">
                        <button class="t_flex t_button button_banner" type="button">
                            <span class="text">{{ __('message.read_more') }}</span>
                            <span class="icon">
                                <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white" />
                                </svg>
                            </span>
                        </button>
                    </a>
                </div>
                <div class="content_right">
                    <img src="/assets/img/contact/{{ $trans['image_culture'] ?? '' }}">
                </div>
            </div>
        </div>
        @include('client.layouts.partials.wrap_contact')
    </main>
@endsection
