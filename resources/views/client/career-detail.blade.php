@extends('client.layouts.master')

@section('content')
<main role="main" id="MainContent">
    <div class="banner banner_job">
        <div class="t_container t_flex banner_wrapper">
            <div class="heading">{{ $result->title }}</div>
            <div class="message">{{ $result->description }}<br><br></div>
        </div>
    </div>
    <div class="job_description">
        <div class="t_container t_flex job_description_wrapper">
            <div class="content_left">
                {!! $result->content !!}
            </div>
            <div class="content_right">
                <div class="other_jobs">
                    <div class="title">{{ __('message.others') }}</div>
                    @foreach ($careers as $key => $career)
                        @if ($career->id != $result->id)
                            <div class="item_job">
                                <a href="/career/{{ $career->id }}" class="name">{{ $career->title }}</a>
                                <div class="deadline">{{ \Carbon\Carbon::parse()->format('d-m-Y') }}</div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="find_more_jobs">
        <div class="t_container find_more_job_wrapper">
            <div class="title">
                <div class="heading">{{ __('message.careers_title') }}</div>
                <div class="message">
                    {{ __('message.careers_description') }}
                </div>
            </div>
            <div class="more_jobs_content">
                <div class="owl-carousel owl-theme slide_items">
                    @foreach ($careers as $key => $career)
                        @if ($career->id != $result->id)
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
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white"/>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('client.layouts.partials.wrap_us')        
    @include('client.layouts.partials.wrap_contact')
</main>
@endsection