@extends('client.layouts.master')

@section('content')
    <main role="main" id="MainContent">
        <div class="blogs_list">
            <div class="t_container blosg_list_wrapper">
                <div class="heading">
                    <h3>{{ __('message.new_title') }}</h3>
                </div>
                <div class="t_flex blogs_list_content">
                    @foreach ($blogs as $key => $blog)
                        <div class="item">
                            <a href="/article/{{ $blog->id }}">
                                <div class="image_item">
                                    <img src="/assets/img/blog/{{ $blog->image }}">
                                </div>
                                <div class="updated_time">{{ \Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</div>
                                <div class="title">{{ $blog->title }}</div>
                                <div class="t_flex see_more">
                                    <span class="text">{{ __('message.read_more') }}</span>
                                    <span class="icon">
                                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="white"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 0.292893C0.683417 -0.0976311 1.31658 -0.0976311 1.70711 0.292893L7.70711 6.29289C8.09763 6.68342 8.09763 7.31658 7.70711 7.70711L1.70711 13.7071C1.31658 14.0976 0.683417 14.0976 0.292893 13.7071C-0.0976311 13.3166 -0.0976311 12.6834 0.292893 12.2929L5.58579 7L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683417 0.292893 0.292893Z" fill="#FF5E34"/>
                                        </svg>                                        
                                    </span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        @include('client.layouts.partials.wrap_us')        
        @include('client.layouts.partials.wrap_contact')
    </main>
@endsection
