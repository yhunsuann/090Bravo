@extends('layout.layout')
@section('content')
    <h4 class="mb-4">Edit Cruitments</h4>
    <h5 class="title-create">Form edit</h5>
    <form class="form-create bg-white p-4" action="{{ URL::to('/update-recruitment/'.$data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf 
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active px-5 rounded-0 lang" id="pills-home-tab" data-coreui-toggle="pill" data-coreui-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">EN</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link px-5 rounded-0 lang" id="pills-profile-tab" data-coreui-toggle="pill" data-coreui-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">VI</button>
        </li>
    </ul>
    <div class="tab-content p-4 border border-dark-2 bg-white" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
            <div class="mb-3">
                <label for="title" class="form-label text-black">Title EN</label>
                <input type="text" class="form-control" name="title_en" id="title" value="{{ $data->title }}" placeholder="Enter title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-black">Description EN</label>
                <textarea class="form-control" name="description_en" id="description" rows="3"  placeholder="Enter description">{{ $data->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label text-black">Content EN</label>
                <textarea class="summernote" name="content_en">{{ $data->content }}</textarea>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <div class="mb-3">
                <label for="title" class="form-label text-black">Title VI</label>
                <input type="text" class="form-control" name="title_vi" id="title" placeholder="Enter title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-black">Description VI</label>
                <textarea class="form-control" name="description_vi" id="description" rows="3" placeholder="Enter description"></textarea>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label text-black">Content VI</label>
                <textarea class="summernote" name="content_vi"></textarea>
            </div>
        </div>
    </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="upload_image">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
        <select name="status" class="form-select" id="status">
        <option value="Active">Active</option>
            <option value="UnActive">UnActive</option>
            <option value="Expired">Expired</option>
            <option value="Closed">Closed</option>
        </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Edit"></input>
    </form>
 @endsection  