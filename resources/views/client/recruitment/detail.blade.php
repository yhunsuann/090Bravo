@extends('client.layout.layout') @section('content')
<main role="main" id="MainContent">
    <div class="banner banner_job">
        <div class="t_container t_flex banner_wrapper">
            @forelse($result as $data) @if($data->language_code == 'vi')
            <div class="heading">{{ $data->title}}</div>
            <div class="message">{{ $data->description}}</div>
            @endif @empty
            <div></div>
            @endforelse
        </div>
    </div>

    <!-- <div class="about_us_hero_banner">
            <img src="/backend/uploads/products/thumbs/2022-05-10-03-29-32-banner.png">
            <div class="t_container t_flex banner_content">
                <h2 class="heading">MARKET RESEARCH INTERN</h2>
                <div class="message">Tìm kiếm, nghiên cứu, phân tích và đánh giá thị trường và sản phẩm tiềm năng</div>
            </div>
        </div> -->

    <div class="job_description">
        <div class="t_container t_flex job_description_wrapper">
            <div class="content_left">
                @forelse($result as $data) @if($data->language_code == 'vi') {!! $data->content !!} @endif @empty
                <div></div>
                @endforelse
            </div>
            <div class="content_right">
                <div class="other_jobs">
                    <div class="title">Các vị trí khác</div>
                    @forelse ($recruitment as $recruitment) @forelse ($recruitment->recruitmentTranslates as $data)
                    <div class="item_job">
                        <a href="thuc-tap-sinh-tuyen-dung-16817131.html" class="name">{{ $data->title}}</a>
                        <div class="deadline">{{ $recruitment->created_at}}</div>
                    </div>
                    @empty
                    <div></div>
                    @endforelse @empty
                    <div></div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    <div class="find_more_jobs">
        <div class="t_container find_more_job_wrapper">
            <div class="title">
                <div class="heading">Tìm thấy vị trí dành cho mình</div>
                <div class="message">
                    Về với Sonat bạn có cơ hội được đào tạo và phát triển bản thân , nhận được chế độ đãi ngộ hấp dẫn và được làm việc trong văn phòng hạng A đầy cây xanh và những tiện ích hiện đại
                </div>
            </div>


            <div class="more_jobs_content">
                <div class="owl-carousel owl-theme slide_items">
                    @forelse ($allrecruitment as $recruit) @forelse ($recruit->recruitmentTranslates as $data)
                    <div class="item_wrapper">
                        <div class="item">
                            <div class="content_item">
                                <a href="admin-officer-16594970.html" class="desc">
                                    <div class="heading">{{ $data->title}}</div>
                                    <div class="message">
                                        <p>{{ $data->description }}</p>
                                    </div>
                                </a>
                            </div>
                            <div class="t_line"></div>
                            <a href="admin-officer-16594970.html" class="t_flex see_more">
                                <span class="text">Đọc thêm</span>
                                <span class="icon">
                                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white"/>
                                            </svg>                                        
                                        </span>
                            </a>
                        </div>

                    </div>
                    @empty
                    <div></div>
                    @endforelse @empty
                    <div></div>
                    @endforelse
                </div>
            </div>
        </div>


        <div class="banner">
            <div class="t_container t_flex banner_wrapper">
                <div class="heading">Tìm Kiếm Cơ Hội</div>
                <div class="message">Tìm kiếm cơ hội sáng tạo cùng Sonat Game Studio</div>
                <a href="../career.html">
                    <button class="t_flex t_button button_banner" type="button">
                        <span class="text">Tham gia cùng chúng tôi</span>
                    </button>
                </a>
            </div>
        </div>
        <div class="contact_us_wrapper">
            <div class="t_container t_flex contact_us">
                <div class="t_flex content_left">
                    <div class="heading">Liên Hệ</div>
                    <div class="message">Bạn cần hỗ trợ, quan tâm đến việc hợp tác kinh doanh hay có các câu hỏi khác, hãy liên hệ với chúng tôi</div>
                    <div class="t_flex contact_infos">
                        <div class="item">
                            <div class="title">Địa chỉ</div>
                            <div class="content">Tầng 11 - Bamboo Airways Tower - 265 Cầu Giấy - Hà Nội • 268 - Lý Thường Kiệt - Phường 14 - Quận 10 - TP.HCM</div>
                        </div>
                        <div class="item">
                            <div class="title">Điện thoại</div>
                            <div class="content">+84 911 675 086</div>
                        </div>
                    </div>
                    <div class="title_action">Hoặc bạn có thể liên hệ với chúng tôi</div>
                    <div class="t_flex action">
                        <a href="mailto:sonatvn@sonat.vn">
                            <button class="t_flex t_button button_banner" type="button">
                                <span class="text">Email Address</span>
                                <span class="icon">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white"/>
                                    </svg>                                
                                </span>
                            </button>
                        </a>
                        <a href="https://www.facebook.com/SonatGameStudio/">
                            <button class="t_flex t_button button_banner" type="button">
                                <span class="text">Via Facebook</span>
                                <span class="icon">
                                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white"/>
                                    </svg>                                
                                </span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="content_right">
                    <img src="{{ asset('assets/img_client/recruitment/2022-04-19-06-59-42-400x300-2-1.png') }}">
                </div>
            </div>
        </div>
</main>
@endsection