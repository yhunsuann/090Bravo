@extends('layout.layout') @section('content')
<h4 class="mb-4">Information Office</h4>
<h5 class="title-create">Post office edit</h5>
<form class="form-create bg-white p-4" action="{{ URL::to('/update-recruitment/')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <input type="hidden" name="" value="">
        <li class="nav-item" role="presentation">
            <button class="nav-link px-5 rounded-0 lang active" id="" data-coreui-toggle="pill" data-coreui-target="" type="button" role="tab" aria-controls="" aria-selected="">English</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link px-5 rounded-0" id="" data-coreui-toggle="pill" data-coreui-target="" type="button" role="tab" aria-controls="" aria-selected="">Vietnamese</button>
        </li>
    </ul>

    <div class="tab-content p-4 border border-dark-2 bg-white" id="pills-tabContent">
        <div class="tab-pane fade show active " id="" role="tabpanel" aria-labelledby="" tabindex="0">
            <div class="mb-3">
                <label for="title" class="form-label text-black">Title </label>
                <input type="text" class="form-control" name="title[]" id="title" placeholder="Enter title" value="">
                <input type="hidden" class="form-control" name="language_code[]" id="title" placeholder="Enter title" value="">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-black">Description </label>
                <textarea class="form-control" name="description[]" id="description" rows="3" placeholder="Enter description"></textarea>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label text-black">Content </label>
                <textarea class="summernote" name="content[]"></textarea>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row image mb-2">
            <div class="col-3 mt-2">
                <img src="{{ asset('assets/img/post/2.jpg') }}" class="" alt="2.jpg">
                <div class='upload__img-closes'></div>
            </div>
            <div class="col-3  mt-2">
                <img src="{{ asset('assets/img/post/2.jpg') }}" class="" alt="2.jpg">
                <div class='upload__img-closes'></div>
            </div>
            <div class="col-3  mt-2">
                <img src="{{ asset('assets/img/post/2.jpg') }}" class="" alt="2.jpg">
                <div class='upload__img-closes'></div>
            </div>
            <div class="col-3  mt-2">
                <img src="{{ asset('assets/img/post/2.jpg') }}" class="" alt="2.jpg">
                <div class='upload__img-closes'></div>
            </div>
            <div class="upload__img-wrap"></div>
        </div>
        <div class="upload__box">
            <div class="upload__btn-box">
                <label class="upload__btn">
      <p>Upload images</p>
      <input type="file" multiple="" name="images[]" class="upload__inputfile">
         </label>
            </div>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Save"></input>
</form>
@endsection