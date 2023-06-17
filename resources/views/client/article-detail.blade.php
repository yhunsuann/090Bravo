@extends('client.layouts.master')

@section('content')
    <main role="main" id="MainContent">
        <div class="hero_banner1 on_about_people_page on_article_page">
            <div class="t_container t_flex banner_content">
                <div class="sub_heading">{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</div>
                <h2 class="heading">{{ $blog->title }}</h2>
                <div class="message">
                    <p dir="ltr">
                        <strong>
                            {{ $blog->description }}
                        </strong>
                    </p>
                </div>
            </div>
        </div>

        <div class="article_content">
            <div class="t_container article_content_wrapper">
                {!! $blog->content !!}
            </div>
        </div>

        @include('client.layouts.partials.wrap_us')       
    </div>
@endsection
