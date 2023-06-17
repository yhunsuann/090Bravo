@extends('client.layouts.master')

@section('content')
    <main role="main" id="MainContent">
        <div class="contact_us_hero_banner">
            <div class="t_container t_flex banner_content">
                <h2 class="heading">{{ __('message.contact') }}</h2>
            </div>
        </div>
        <div class="history_infos on_contact_page">
            <div class="t_container history_infos_wrapper">
                <div class="t_flex line">
                    <div class="title">{{ __('message.hotline') }}</div>
                    <div class="content">
                        <a href="tel:{{ $trans['phone_number'] ?? '' }}">{{ $trans['phone_number'] ?? '' }}</a>
                    </div>
                </div>
                <div class="t_flex line">
                    <div class="title">{{ __('message.email') }}</div>
                    <div class="content">
                        <a href="mailto:{{ $trans['email'] ?? '' }}">{{ $trans['email'] ?? '' }}</a>
                    </div>
                </div>
                <div class="t_flex line">
                    <div class="title">{{ __('message.address') }}</div>
                    <div class="content">{{ $trans['address_textarea'] ?? '' }}</div>
                </div>
                <div class="t_flex line">
                    <div class="title">{{ __('message.work_time') }}</div>
                    <div class="content">{{ $trans['work_time'] ?? '' }}</div>
                </div>
            </div>
        </div>
        <div class="contact_us_wrapper on_contact_page">
            <div class="t_container t_flex contact_us">
                <div class="t_flex content_left">
                    <div class="heading">{{ __('message.contact') }}</div>
                    <div class="contact_box">
                        <input type="text" placeholder="{{ __('message.full_name') }}" class="name">
                        <input type="email" placeholder="{{ __('message.email_form') }}" class="email">
                        <input type="number" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="11" pattern="(\+84|0)\d{9,10}" required placeholder="{{ __('message.phone_number') }}" class="tel">
                        <textarea placeholder="{{ __('message.message') }}" class="message"></textarea>
                        <a href="javascript:void(0)">
                            <button class="t_flex t_button button_banner send_contact" type="button" onclick="sendContact()">
                                <span class="text">{{ __('message.send') }}</span>
                            </button>
                        </a>
                    </div>
                </div>
                <div class="content_right">
                    <img src="/assets/img/contact.jpeg">
                </div>
            </div>
        </div>
        @include('client.layouts.partials.wrap_us')
    </main>
@endsection
