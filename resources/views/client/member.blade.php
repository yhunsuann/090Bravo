@extends('client.layouts.master')

@section('content')
    <main role="main" id="MainContent">
        <div class="hero_banner1 on_about_people_page">
            <div class="t_container t_flex banner_content">
                <h2 class="heading">{{ $post->title }}</h2>
                <div class="message">{{ $post->description }}</div>
            </div>
        </div>
        <div class="content_message">
            <div class="t_container t_flex content_message_wrapper">
                <div class="message">{{ __('message.listen_together') }}</div>
            </div>
        </div>
        <div class="our_cultural">
            <div class="t_container our_cultural_wrapper">
                {!! $post->content !!}
            </div>
        </div>
        <div class="hero_banner2 on_about_people_page">
            
            <div class="image_gallery">
                @foreach($images as $items)
                    <div class="gallery_row row1">
                        <div class="t_flex row_content">
                            @foreach($items as $item)
                                <div class="box_item item1">
                                    <div class="item">
                                        <div class="img_wrapper">
                                            <img src="/assets/img/post/{{ $item }}">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
        @include('client.layouts.partials.wrap_us')
        @include('client.layouts.partials.wrap_contact')
    </main>
@endsection
