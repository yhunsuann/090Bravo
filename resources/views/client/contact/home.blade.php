@extends('client.layout.layout') @section('content')
<main role="main" id="MainContent">
    <div class="contact_us_hero_banner">
        <div class="t_container t_flex banner_content">
            <h2 class="heading">{{ __('message.contact')}}</h2>
        </div>
    </div>

    <div class="history_infos on_contact_page">
        <div class="t_container history_infos_wrapper">
            @forelse($result as $data) @if($data->contact_key == 'phone_text')
            <div class="t_flex line">
                <div class="title">{{ __('message.hotline')}}</div>
                <div class="content"><a>{{ $data->value }}</a></div>
            </div>
            @endif @empty
            <div></div>
            @endforelse @forelse($result as $data) @if($data->contact_key == 'email_text')
            <div class="t_flex line">
                <div class="title">{{ __('message.email')}}</div>
                <div class="content"><a>{{ $data->value }}</a></div>
            </div>
            @endif @empty
            <div></div>
            @endforelse @forelse($result as $data) @if($data->contact_key == 'add_text')
            <div class="t_flex line">
                <div class="title">{{ __('message.address')}}</div>
                <div class="content"><a>{{ $data->value }}</a></div>
            </div>
            @endif @empty
            <div></div>
            @endforelse @forelse($result as $data) @if($data->contact_key == 'time_work')
            <div class="t_flex line">
                <div class="title">{{ __('message.work_time')}}</div>
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
                <div class="heading">{{ __('message.contact')}}</div>
                <div class="contact_box">
                    <form action="{{ route('contact.submit') }}" method="post">
                        @csrf
                        <input name="name" type="text" placeholder="{{ __('message.full_name')}}" class="name">
                        <input type="email" name="email"  placeholder="{{ __('message.email')}}" class="email">
                        <input type="text" name="phone" placeholder="{{ __('message.phone_number')}}">
                        <textarea name="message" placeholder="{{ __('message.message')}}" class="message"></textarea>
                        <input class="t_flex t_button button_banner send_contact" type="submit" value="{{ __('message.send')}}">
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
            <div class="heading">{{ __('message.btn_intership_program')}}</div>
            <div class="message">{{ __('message.content_intership_program')}}</div>
            <a href="{{ route('recruitment.index') }}">
                <button class="t_flex t_button button_banner" type="button">
                        <span class="text">{{ __('message.btn_intership_program')}}</span>
                    </button>
            </a>
        </div>
    </div>
</main>
@endsection