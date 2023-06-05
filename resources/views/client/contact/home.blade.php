@extends('client.layout.layout') @section('content')
<main role="main" id="MainContent">
    <div class="contact_us_hero_banner">
        <div class="t_container t_flex banner_content">
            <h2 class="heading">Liên Hệ</h2>
        </div>
    </div>

    <div class="history_infos on_contact_page">
        <div class="t_container history_infos_wrapper">
            @forelse($result as $data) @if($data->contact_key == 'phone_text')
            <div class="t_flex line">
                <div class="title">{{ $data->name }}</div>
                <div class="content"><a>{{ $data->value }}</a></div>
            </div>
            @endif @empty
            <div></div>
            @endforelse @forelse($result as $data) @if($data->contact_key == 'email_text')
            <div class="t_flex line">
                <div class="title">{{ $data->name }}</div>
                <div class="content"><a>{{ $data->value }}</a></div>
            </div>
            @endif @empty
            <div></div>
            @endforelse @forelse($result as $data) @if($data->contact_key == 'add_text')
            <div class="t_flex line">
                <div class="title">{{ $data->name }}</div>
                <div class="content"><a>{{ $data->value }}</a></div>
            </div>
            @endif @empty
            <div></div>
            @endforelse @forelse($result as $data) @if($data->contact_key == 'time_work')
            <div class="t_flex line">
                <div class="title">{{ $data->name }}</div>
                <div class="content"><a>{{ $data->value }}</a></div>
            </div>
            @endif @empty
            <div></div>
            @endforelse

        </div>
    </div>

    <div class="contact_us_wrapper on_contact_page">

        <div class="t_container t_flex contact_us">

            <div class="t_flex content_left">
                <div class="heading">Liên Hệ</div>
                <div class="contact_box">
                    <form action="{{ URL::to('/contact/submit')}}" method="post">
                        @csrf
                        <input name="name" type="text" placeholder="Họ và tên" class="name">
                        <input type="email" name="email"  placeholder="Địa chỉ Email" class="email">
                        <input type="text" name="phone" placeholder="Số điện thoại">
                        <textarea name="message" placeholder="Lời nhắn" class="message"></textarea>
                        <input class="t_flex t_button button_banner send_contact" type="submit" value="Gửi">
                    </form>
                </div>
            </div>

            <div class="content_right">
                @forelse($result as $data) @if($data->contact_key == 'Image1')
                <img src="{{ asset('assets/img/contact/'.$data->value) }}"> @endif @empty
                <div></div>
                @endforelse

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
</main>
@endsection