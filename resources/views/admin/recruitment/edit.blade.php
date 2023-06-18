@extends('admin.layout.layout')

@section('content')
    @include('admin.layout.partials.flag')
    <h4 class="mb-4">Edit Cruitments</h4>
    <h5 class="title-create">Form edit</h5>
    <form class="form-create bg-white p-4" action="{{ route('admin.recruitment.update', request()->segment(4)) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            @forelse ($result->recruitmentTranslates as $key => $data)
                <input type="hidden" name="count[{{ $key }}]" value="{{ $loop->index }}">
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-5 rounded-0 lang{{ $key == 0 ? ' active' : '' }}" id="{{ $data->language_code }}" data-coreui-toggle="pill" data-coreui-target="#1{{ $data->language_code }}" type="button" role="tab" aria-controls="{{ $data->language_code }}"
                        aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $data->language_code == 'en' ? 'English' : 'VietNamese'  }}</button>
                </li>
            @empty
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-5 rounded-0 lang active" id="vi" data-coreui-toggle="pill" data-coreui-target="#vi" type="button" role="tab" aria-controls="vi" aria-selected="true">Viet Nam</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link px-5 rounded-0 lang" id="en" data-coreui-toggle="pill" data-coreui-target="#en" type="button" role="tab" aria-controls="en" aria-selected="false">English</button>
                </li>
            @endforelse
        </ul>

        <div class="tab-content p-4 border border-dark-2 bg-white" id="pills-tabContent">
            @forelse ($result->recruitmentTranslates as $key => $data)
            <div class="tab-pane fade{{ $key == 0 ? ' show active' : '' }}" id="1{{ $data->language_code}}" role="tabpanel" aria-labelledby="{{ $data->language_code }}" tabindex="0">
                <div class="mb-3">
                    <label for="title" class="form-label text-black">{{ config('constants.' . $data->language_code . '.title') }}</label>
                    <input type="text" class="form-control" name="title[]" id="title" placeholder="Enter title" value="{{ $data->description }}">
                    <input type="hidden" class="form-control" name="language_code[]" id="title" placeholder="Enter title" value="{{ $data->language_code }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label text-black">{{ config('constants.' . $data->language_code . '.description') }}</label>
                    <textarea class="form-control" name="description[]" id="description" rows="3" placeholder="Enter description">{{ $data->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label text-black">{{ config('constants.' . $data->language_code . '.content') }}</label>
                    <textarea class="summernote" name="content[]">{{ $data->content }}</textarea>
                </div>
            </div>
            @empty
            <div class="tab-pane fade show active" id="vi" role="tabpanel" aria-labelledby="vi" tabindex="0">
                <div class="mb-3">
                    <label for="title" class="form-label text-black">Title vi</label>
                    <input type="text" class="form-control" name="title[]" id="title" placeholder="Enter title" value="">
                    <input type="hidden" class="form-control" name="language_code[]" id="title" placeholder="Enter title" value="">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label text-black">Description vi</label>
                    <textarea class="form-control" name="description[]" id="description" rows="4" placeholder="Enter description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label text-black">Content vi</label>
                    <textarea class="summernote" name="content[]"></textarea>
                </div>
            </div>
            <div class="tab-pane fade" id="en" role="tabpanel" aria-labelledby="en" tabindex="0">
                <div class="mb-3">
                    <label for="title" class="form-label text-black">Title en</label>
                    <input type="text" class="form-control" name="title[]" id="title" placeholder="Enter title" value="">
                    <input type="hidden" class="form-control" name="language_code[]" id="title" placeholder="Enter title" value="en">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label text-black">Description en</label>
                    <textarea class="form-control" name="description[]" id="description" rows="4" placeholder="Enter description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label text-black">Content en</label>
                    <textarea class="summernote" name="content[]"></textarea>
                </div>
            </div>
            @endforelse
        </div>
        <div class="row mt-3">
            <div class="mb-3 col-6">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" name="upload_image"> 
                @if (!empty($result->image))
                    <div class="image-item">
                        <img height="80px" src="{{ asset('assets/img/recruitments/' . $result->image)}}" alt="">
                    </div>
                @endif
            </div>
            <div class="mb-3 col-6">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-select" id="status" style="width: 100%">
                    <option value="active" @if($result->status == 'active') selected @endif>Active</option>
                    <option value="inactive" @if($result->status == 'inactive') selected @endif>Inactive</option>
                </select>
            </div>
        </div>
        <input type="submit" class="btn btn-primary btn-save" value="Edit"></input>
    </form>
@endsection
