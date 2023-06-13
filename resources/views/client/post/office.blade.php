@extends('client.layout.layout') @section('content')
<main role="main" id="MainContent">
    <div class="hero_banner1 on_about_people_page">
        <div class="t_container t_flex banner_content">
            @forelse($result as $member) @forelse($member->postTranslates as $data) @if(App::getLocale() === $data->language_code)
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
            <div class="message">{{ __('message.title_member')}}</div>
        </div>
    </div>

        @forelse($result as $members) @forelse($members->postTranslates as $datas) @if(App::getLocale() === $datas->language_code)
        <div class="message">{!! $datas->content !!}</div>
        @endif @empty
        <div></div>
        @endforelse @empty
        <div></div>
        @endforelse

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