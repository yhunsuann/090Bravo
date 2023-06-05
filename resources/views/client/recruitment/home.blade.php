@extends('client.layout.layout') @section('content')
<main role="main" id="MainContent">
    <div class="hero_banner1 on_about_people_page on_careers_page">
        <div class="t_container t_flex banner_content">
            <h2 class="heading">Tuyển Dụng</h2>
            <div class="message">
                Nếu bạn là người sáng tạo, yêu thích những thử thách và mong muốn lan tỏa niềm vui tới cộng đồng thông qua những tựa game giải đố thú vị thì hãy gia nhập Sonat ngay hôm nay!
            </div>
        </div>
    </div>

    <!-- <div class="about_us_hero_banner careers_page">
            <img src="/backend/uploads/products/thumbs/2022-05-10-03-29-32-banner.png">
            <div class="t_container t_flex banner_content">
                <h2 class="heading">Tuyển Dụng</h2>
                <div class="message">Nếu bạn là người sáng tạo, yêu thích những thử thách và mong muốn lan tỏa niềm vui tới cộng đồng thông qua những tựa game giải đố thú vị thì hãy gia nhập Sonat ngay hôm nay!</div>
            </div>
        </div> -->

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
                    @forelse ($result as $data) @forelse ($data->recruitmentTranslates as $data)
                        <div class="item_wrapper">
                            <div class="item">
                                <div class="content_item">
                                    <a class="desc">
                                        <div class="heading">{{ $data->title}}</div>
                                        <div class="message">{{ $data->description}}</div>
                                    </a>
                                </div>
                                <div class="t_line"></div>
                                <a href="{{ URL::to('/recruitment/detail/'.$data->recruitment_id)}}" class="t_flex see_more">
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
    </div>
    <div class="about_us_hero_banner career-hot">
        <img src="assets/img_client/recruitment/2022-05-10-03-29-32-banner.png">
        <div class="t_container t_flex banner_content">
            <h2 class="heading">MARKETING INTERNSHIP PROGRAM</h2>
            <div class="message">
                <p>​​​​​​​​​​​​​​Cơ hội trở thành Marketer tại Top 1 Puzzle Game Studio Việt Nam</p>
                <div data-cke-hidden-sel="1" data-cke-temp="1" style="position:fixed;top:0;left:-1000px">ảnh widget</div>
            </div>
            <a href="c/internship-program-16509403.html">
                <button class="t_flex t_button button_banner" type="button">
            <span class="text">Tham gia cùng chúng tôi</span>
        </button>
            </a>
        </div>
    </div>
    <!-- <div class="banner" style="background-image:url('/backend/uploads/products/thumbs/2022-05-10-03-29-32-banner.png')">
<div class="t_container t_flex banner_wrapper">
    <div class="heading">MARKETING INTERNSHIP PROGRAM</div>
    <div class="message"><p>​​​​​​​​​​​​​​Cơ hội trở thành Marketer tại Top 1 Puzzle Game Studio Việt Nam</p><div data-cke-hidden-sel="1" data-cke-temp="1" style="position:fixed;top:0;left:-1000px">ảnh widget</div></div>
    <a href="https://sonat.vn/c/internship-program-16509403">
        <button class="t_flex t_button button_banner" type="button">
            <span class="text">Tham gia cùng chúng tôi</span>
        </button>
    </a>
</div>
</div> -->

    <div class="our_vison our_people">
        <div class="t_container t_flex our_vison_wrapper">
            <div class="t_flex content_left">
                <div class="heading">Con Người Sonat</div>
                <div class="message">
                    Đến với Sonat, thứ bạn có được không chỉ là một mức lương chất lượng, nhiều đãi ngộ xứng đáng, môi trường làm việc trẻ trung, mà còn là những người đồng đội tài năng, nhiệt huyết và tận tình. <br><br> 06 yếu tố làm nên một Sonat-ers
                    hoàn hảo: <br>- Tinh thần nhiệt huyết, luôn sẵn sàng chiến đấu <br>- Tinh thần hướng đến tư duy đổi mới - sáng tạo <br>- Thái độ ham học hỏi, tìm tòi và phát triển bản thân <br>- Hòa đồng, thân thiện, cùng nhau tiến bộ và thành công
                    <br>- Luôn hỗ trợ lẫn nhau trong cả công việc và cuộc sống<br>- Dám đương đầu thử thách, luôn hướng tới mục tiêu cao hơn
                </div>
                <a href="people.html">
                    <button class="t_flex t_button button_banner" type="button">
                <span class="text">Đọc thêm</span>
                <span class="icon">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white"/>
                    </svg>                                
                </span>
            </button>
                </a>
            </div>
            <div class="content_right">
                <img src="assets/img_client/recruitment/2022-05-04-10-04-49-resize-anh-vp-moi.png">
            </div>
        </div>
    </div>

    <div class="our_mission careers_our_cultural">
        <div class="t_container t_flex our_mission_wrapper">
            <div class="t_flex content_left">
                <div class="heading">Văn Hóa Ở Sonat</div>
                <div class="message">
                    1. Làm việc nhóm<br><br>2. Chia sẻ <br><br>3. Trao đổi thông tin<br><br>4. Khai phá tiềm năng<br><br>5. Trách nhiệm với tập thể<br><br>6. Thái độ chuyên nghiệp
                </div>
                <a href="about-us.html">
                    <button class="t_flex t_button button_banner" type="button">
                <span class="text">Đọc thêm</span>
                <span class="icon">
                    <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white"/>
                    </svg>                                
                </span>
            </button>
                </a>
            </div>
            <div class="content_right">
                <img src="assets/img_client/recruitment/2022-04-19-04-10-38-tuyendung-1136x960-2.png">

            </div>
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
                <img src="assets/img_client/recruitment/2022-04-19-06-59-42-400x300-2-1.png">
            </div>
        </div>
    </div>
</main>
@endsection