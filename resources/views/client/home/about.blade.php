@extends('client.layout.layout') @section('content')
<main role="main" id="MainContent">


    <div class="hero_banner1 on_about_people_page on_careers_page">
        <div class="t_container t_flex banner_content">
            <h2 class="heading">Bravo</h2>
            <div class="message">
            {{ __('message.about_description')}}
            </div>
        </div>
    </div>

    <div class="history_infos">
        <div class="t_container history_infos_wrapper">
            <div class="t_flex line">
                <div class="title">{{ __('message.founded')}}</div>
                <div class="content">{{ __('message.founded_message')}}</div>
            </div>
            <div class="t_flex line">
                <div class="title">{{ __('message.ownership')}}</div>
                <div class="content">{{ __('message.ownership_message')}}</div>
            </div>
            <div class="t_flex line">
                <div class="title">{{ __('message.address')}}</div>
                <div class="content">{{ __('message.address_message')}}</div>
            </div>
            <div class="t_flex line">
                <div class="title">{{ __('message.biography')}}</div>
                <div class="content">{{ __('message.biography_message')}}</div>
            </div>
            <div class="t_flex line">
                <div class="title">{{ __('message.achievement')}}</div>
                <div class="content">{{ __('message.achievement_message')}}</div>
            </div>
        </div>
    </div>

    <div id="our_vison" class="our_vison">
        <div class="t_container t_flex our_vison_wrapper">
            <div class="t_flex content_left">
                <div class="heading">{{ __('message.about_title_vision')}}</div>
                <div class="message">{{ __('message.about_title_vision_message')}}</div>
            </div>
            <div class="content_right">
                <img src="{{ asset('assets/img_client/layout/vission.png')}}">
            </div>
        </div>
    </div>

    <div id="our_mission" class="our_mission">
        <div class="t_container t_flex our_mission_wrapper">
            <div class="t_flex content_left">
                <div class="heading">{{ __('message.about_title_mission')}}</div>
                <div class="message">{{ __('message.about_title_mission_message')}}</div>
            </div>
            <div class="content_right">
                <img src="{{ asset('assets/img_client/layout/mission.png')}}">
            </div>
        </div>
    </div>

    <div id="contact_us_core_value" class="contact_us_core_value">
        <div class="t_container contact_us_core_value_wrapper">
            <div class="title">
                <div class="heading">{{ __('message.about_title_coreValue')}}</div>
                <div class="message">{{ __('message.about_title_coreValue_message')}}</div>
            </div>
            <div class="t_flex content">
                <div class="item">
                    <div class="image box1">
                        <img src="{{ asset('assets/img_client/layout/2022-04-19-04-31-20-lam-viec.png')}}">
                    </div>
                    <div class="heading">
                        {{ __('message.creativity')}}
                    </div>
                    <div class="message">
                        {{ __('message.creativity_message')}}
                    </div>
                </div>
                <div class="item">
                    <div class="image box2">
                        <img src="{{ asset('assets/img_client/layout/2022-04-05-10-36-49-dscf2722.jpg')}}">
                    </div>
                    <div class="heading">
                    {{ __('message.enthusiasm')}}
                    </div>
                    <div class="message">
                    {{ __('message.enthusiasm_message')}}
                    </div>
                </div>
                <div class="item">
                    <div class="image box3">
                        <img src="{{ asset('assets/img_client/layout/2022-04-19-04-37-14-hop-2.png')}}">
                    </div>
                    <div class="heading">
                    {{ __('message.human_values')}}
                    </div>
                    <div class="message">
                    {{ __('message.human_values_message')}}
                    </div>
                </div>
                <div class="item">
                    <div class="image box4">
                        <img src="{{ asset('assets/img_client/layout/2022-04-19-03-22-49-vh-cn-1600x900-7.png')}}">
                    </div>
                    <div class="heading">
                    {{ __('message.resonance')}}
                    </div>
                    <div class="message">
                    {{ __('message.resonance_message')}}
                    </div>
                </div>
                <div class="item">
                    <div class="image box5">
                        <img src="{{ asset('assets/img_client/layout/2022-04-19-03-22-50-gtcl-1600x900-5.png')}}">
                    </div>
                    <div class="heading">
                    {{ __('message.sharing')}}
                    </div>
                    <div class="message">
                    {{ __('message.sharing_message')}}
                    </div>
                </div>
                <div class="item">
                    <div class="image box6">
                        <img src="{{ asset('assets/img_client/layout/2022-04-12-07-50-19-dscf2399.jpg')}}">
                    </div>
                    <div class="heading">
                    {{ __('message.assertiveness')}}
                    </div>
                    <div class="message">
                    {{ __('message.assertiveness_message')}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="banner">
        <div class="t_container t_flex banner_wrapper">
            <div class="heading">{{ __('message.btn_intership_program')}}</div>
            <div class="message">{{ __('message.content_intership_program')}}</div>
            <a href="{{ URL::to('/recruitment')}}">
                <button class="t_flex t_button button_banner" type="button">
                        <span class="text">{{ __('message.btn_intership_program')}}</span>
                    </button>
            </a>
        </div>
    </div>
</main>
@endsection