@extends('layout.layout') @section('content')
<h4 class="mb-4">Information Office</h4>
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@php Session::forget('success'); @endphp @endif
<h5 class="title-create">Post office edit</h5>
<form class="form-create bg-white p-4" action="{{ URL::to('/post/update/'.$result[0]->type)}}" method="POST" enctype="multipart/form-data">
    @csrf
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <input type="hidden" name="" value=""> @foreach ($result as $post) @foreach ($post->postTranslates as $key => $postTranslate) @if ($postTranslate->language)
        <li class="nav-item" role="presentation">
            <button class="nav-link px-5 rounded-0 lang{{ $key == 0 ? ' active' : '' }}" id="{{ $postTranslate->language->language_code }}" data-coreui-toggle="pill" data-coreui-target="#1{{ $postTranslate->language->language_code }}" type="button" role="tab" aria-controls="{{$postTranslate->language->language_code }}"
                aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $postTranslate->language->language_name }}</button>
        </li>
        @endif @endforeach @endforeach
    </ul>

    <div class="tab-content p-4 border border-dark-2 bg-white" id="pills-tabContent">
        @foreach ($result as $post) @foreach ($post->postTranslates as $key => $postTranslate)
        <div class="tab-pane fade{{ $key == 0 ? ' show active' : '' }}" id="1{{ $postTranslate->language_code}}" role="tabpanel" aria-labelledby="{{ $postTranslate->language_code }}" tabindex="0">
            <div class="mb-3">
                <label for="title" class="form-label text-black">Title {{ $postTranslate->language_code }}</label>
                <input type="text" class="form-control" name="title[]" id="title" placeholder="Enter title" value="{{ $postTranslate->description }}">
                <input type="hidden" class="form-control" name="language_code[]" id="title" placeholder="Enter title" value="{{ $postTranslate->language_code }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-black">Description {{ $postTranslate->language_code }}</label>
                <textarea class="form-control" name="description[]" id="description" rows="3" placeholder="Enter description">{{ $postTranslate->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label text-black">Content {{ $postTranslate->language_code }}</label>
                <textarea class="summernote" name="content[]">{{ $postTranslate->content }}</textarea>
            </div>
        </div>
        @endforeach @endforeach
    </div>
    <div class="row image mb-2">
        @php 
        $allImages = []; 
        @endphp 
        @foreach ($result as $post) 
            @php $images = json_decode($post->images); 
        @endphp 
        @foreach ($images as $image) 
             @php $allImages[] = $image; 
        @endphp
        <div class="col-3 mt-2">
            <input type="hidden" name-image="{{$image}}" name="upload_image" class="images-list" value="{{ json_encode($allImages) }}"></input>
            <img src="{{ asset('assets/img/post/'.$image) }}" class="" alt="{{ $image }}">
            <div class="upload__img-closes"></div>
        </div>
        @endforeach @endforeach
    </div>
    <div class="upload__box">
        <div class="upload__btn-box">
            <label class="upload__btn">
      <p>Upload images</p>
      <input type="file" name="upload_new[]" multiple="" class="upload__inputfile">
         </label>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Save"></input>
</form>
@endsection