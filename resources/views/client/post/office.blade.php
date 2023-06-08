@extends('client.layout.layout') @section('content')
<main role="main" id="MainContent">
    <div class="hero_banner1 on_about_people_page">
        <div class="t_container t_flex banner_content">
            @forelse($result as $member) @forelse($member->postTranslates as $data) @if($data->language_code == 'vi')
            <h2 class="heading">{{ $data->title }}</h2>
            <div class="message">{{ $data->description }}</div>
            @endif @empty
            <div></div>
            @endforelse @empty
            <div></div>
            @endforelse
        </div>
    </div>

    <div class="content_message">
        <div class="t_container t_flex content_message_wrapper">
            <div class="message">Sonat mong muốn xây dựng môi trường làm việc tuyệt vời, nơi mà mỗi nhân viên luôn cảm thấy thoải mái như ở chính ngôi nhà của mình.</div>
        </div>
    </div>

    <div class="our_cultural">
        @forelse($result as $members) @forelse($members->postTranslates as $datas) @if($datas->language_code == 'vi')
        <div class="message">{!! $datas->content !!}</div>
        @endif @empty
        <div></div>
        @endforelse @empty
        <div></div>
        @endforelse
    </div>

    <div class="hero_banner2 on_about_people_page">
        <div class="image_gallery">
            @if (!$result->isEmpty()) @php $rowCount = 1; @endphp
            <div class="gallery_row row{{ $rowCount }}">
                <div class="t_flex row_content">
                    @foreach ($result as $post) @php $images = json_decode($post->images); @endphp @if (!empty($images)) @foreach ($images as $index => $image) @if ($index % 3 === 0 && $index > 0)
                </div>
            </div>
            @php $rowCount++; @endphp
            <div class="gallery_row row{{ $rowCount }}">
                <div class="t_flex row_content">
                    @endif

                    <div class="box_item item{{ $index + 1 }}">
                        <div class="item">
                            <div class="img_wrapper">
                                <img src="{{ asset('assets/img/post/'.$image) }}">
                            </div>
                        </div>
                    </div>

                    @if (($index + 1) === count($images))
                </div>
            </div>
            @endif @endforeach @endif @endforeach
        </div>
        @endif
    </div>
    </div>
    </div>

    <div class="banner">
        <div class="t_container t_flex banner_wrapper">
            <div class="heading">Tìm Kiếm Cơ Hội</div>
            <div class="message">Tìm kiếm cơ hội sáng tạo cùng Sonat Game Studio</div>
            <a href="career.html">
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