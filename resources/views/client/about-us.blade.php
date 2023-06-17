@extends('client.layouts.master')

@section('content')
<main role="main" id="MainContent">
    <div class="hero_banner1 on_about_people_page on_careers_page" style="background-image: url(/client/backend/uploads/products/thumbs/2022-04-15-03-08-25-about-us-banner.jpg)">
        <div class="t_container t_flex banner_content">
            <h2 class="heading">Bravo Inc</h2>
            <div class="message">
                {{ $trans['aboutus_info'] ?? '' }}
            </div>
        </div>
    </div>

    <div class="history_infos">
        <div class="t_container history_infos_wrapper">
            <div class="t_flex line">
                <div class="title">{{ __('message.company_date') }}</div>
                <div class="content">2017</div>
            </div>
            <div class="t_flex line">
                <div class="title">{{ __('message.company_date') }}</div>
                <div class="content">{{ $trans['ownership'] ?? '' }}</div>
            </div>
            <div class="t_flex line">
                <div class="title">{{ __('message.address') }}</div>
                <div class="content">{{ $trans['address_textarea'] ?? '' }}</div>
            </div>
            <div class="t_flex line">
                <div class="title">{{ __('message.background_information') }}</div>
                <div class="content">{{ $trans['background_info'] ?? '' }}</div>
            </div>
            <div class="t_flex line">
                <div class="title">{{ __('message.achievement') }}</div>
                <div class="content">{{ $trans['achievement'] ?? '' }}</div>
            </div>
        </div>
    </div>

    <div id="our_vison" class="our_vison">
        <div class="t_container t_flex our_vison_wrapper">
            <div class="t_flex content_left">
                <div class="heading">{{ __('message.home_title_vision') }}</div>
                <div class="message">{{ $trans['home_title_vision_message'] ?? '' }}</div>
            </div>
            <div class="content_right">
                <img src="/client/frontend/images/vission.png">
            </div>
        </div>
    </div>

    <div id="our_mission" class="our_mission">
        <div class="t_container t_flex our_mission_wrapper">
            <div class="t_flex content_left">
                <div class="heading">{{ __('message.home_title_mission') }}</div>
                <div class="message">{{ $trans['home_title_mission_message'] ?? '' }}</div>
            </div>
            <div class="content_right">
                <img src="/client/frontend/images/mission.png">
            </div>
        </div>
    </div>

    <div id="contact_us_core_value" class="contact_us_core_value">
        <div class="t_container contact_us_core_value_wrapper">
            <div class="title">
                <div class="heading">{{ __('message.home_title_core') }}</div>
                <div class="message">{{ __('message.about_title_coreValue_message') }}</div>
            </div>
            <div class="t_flex content">
                <div class="item">
                    <div class="image box1">
                        <img src="/assets/img/bravo_1.jpeg">
                    </div>
                    <div class="heading">
                        {{ __('message.creativity') }}
                    </div>
                    <div class="message">
                        {{ $trans['creativity_info'] ?? ''}}
                    </div>
                </div>
                <div class="item">
                    <div class="image box2">
                        <img src="/assets/img/bravo_2.jpeg">
                    </div>
                    <div class="heading">
                        {{ __('message.enthusiasm') }}
                    </div>
                    <div class="message">
                        {{ $trans['enthusiasm_info'] ?? ''}}
                    </div>
                </div>
                <div class="item">
                    <div class="image box3">
                        <img src="/assets/img/bravo_3.jpeg">
                    </div>
                    <div class="heading">
                        {{ __('message.human_values') }}
                    </div>
                    <div class="message">
                        {{ $trans['human_values_info'] ?? ''}}
                    </div>
                </div>
                <div class="item">
                    <div class="image box4">
                        <img src="/assets/img/bravo_4.jpeg">
                    </div>
                    <div class="heading">
                        {{ __('message.resonance') }}
                    </div>
                    <div class="message">
                        {{ $trans['resonance_info'] ?? ''}}
                    </div>
                </div>
                <div class="item">
                    <div class="image box5">
                        <img src="/assets/img/bravo_5.jpeg">
                    </div>
                    <div class="heading">
                        {{ __('message.sharing') }}
                    </div>
                    <div class="message">
                        {{ $trans['sharing_info'] ?? ''}}
                    </div>
                </div>
                <div class="item">
                    <div class="image box6">
                        <img src="/assets/img/bravo_6.jpeg">
                    </div>
                    <div class="heading">
                        {{ __('message.assertiveness') }}
                    </div>
                    <div class="message">
                        {{ $trans['assertiveness_info'] ?? ''}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('client.layouts.partials.wrap_us')   
    @include('client.layouts.partials.wrap_contact')
</main>
@endsection
