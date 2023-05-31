@extends('layout.layout') @section('content')
<h4 class="mb-4">Edit Blog</h4>
<h5 class="title-create">Form edit</h5>
<form class="form-create bg-white p-4" action="{{ URL::to('/blog/update/'. request()->segment(3))}}" method="POST" enctype="multipart/form-data">
    @csrf
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        @forelse ($result as $key => $data)
        <input type="hidden" name="count[{{ $key }}]" value="{{ $loop->index }}">
        <li class="nav-item" role="presentation">
            <button class="nav-link px-5 rounded-0 lang{{ $key == 0 ? ' active' : '' }}" id="{{ $data->language_code }}" data-coreui-toggle="pill" data-coreui-target="#1{{ $data->language_code }}" type="button" role="tab" aria-controls="{{ $data->language_code }}"
                aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $data->language_code }}</button>
        </li>
        @empty
        <li>No Data</li>
        @endforelse
    </ul>

    <div class="tab-content p-4 border border-dark-2 bg-white" id="pills-tabContent">
        @forelse ($result as $key => $data)
        <div class="tab-pane fade{{ $key == 0 ? ' show active' : '' }}" id="1{{ $data->language_code}}" role="tabpanel" aria-labelledby="{{ $data->language_code }}" tabindex="0">
            <div class="mb-3">
                <label for="title" class="form-label text-black">Title {{ $data->language_code }}</label>
                <input type="text" class="form-control" name="title[]" id="title" placeholder="Enter title" value="{{ $data->description }}">
                <input type="hidden" class="form-control" name="language_code[]" id="title" placeholder="Enter title" value="{{ $data->language_code }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-black">Description {{ $data->language_code }}</label>
                <textarea class="form-control" name="description[]" id="description" rows="3" placeholder="Enter description">{{ $data->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label text-black">Content {{ $data->language_code }}</label>
                <textarea class="summernote" name="content[]">{{ $data->content }}</textarea>
            </div>
        </div>
        @empty
        <li>No Data</li>
        @endforelse
    </div>
    <div class="row">
        <div class="col">
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" name="upload_image">
            </div>
        </div>
        <div class="col">
            <div class="mt-4">
                <label for="status" class="form-label">Status</label>
                <select name="status" class="form-select" id="status">
                 <option value="Active">Active</option>
                <option value="InActive">InActive</option>
            </select>
            </div>
        </div>
    </div>
    <input type="submit" class="btn btn-primary" value="Edit"></input>
</form>
@endsection