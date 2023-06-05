@extends('client.layout.layout') @section('content')
<main role="main" id="MainContent">
        <div class="hero_banner1 on_about_people_page on_article_page">
            <div class="t_container t_flex banner_content">
                @forelse($result as $data)
                @if($data->language_code == 'vi')
                        <div class="sub_heading"></div>
                        <h2 class="heading">{{$data -> title}}</h2>
                        <div class="message"><p dir="ltr"><b id="docs-internal-guid-e3a03a96-7fff-025d-9908-eb9a6fc829e3">{{ $data->description}}</b></p></div>
                
            </div>
        </div>

        <div class="article_content">
            <div class="t_container article_content_wrapper">
                {!! $data->content !!}
            </div>
        </div>
        @endif
        @empty 
        <div></div>
        @endforelse 
@endsection       