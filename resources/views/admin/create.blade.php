@extends('layout.layout') @section('content') @if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@php Session::forget('success'); @endphp @endif
<h4 class="mb-4">Create Cruitments</h4>
<h5 class="title-create">Form create</h5>
<form class="form-create bg-white p-4" action="{{ URL::to('/add-recruitment')}}" method="POST" enctype="multipart/form-data">
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
                <input type="text" class="form-control" name="title_en" id="title" placeholder="Enter title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-black">Description EN</label>
                <textarea class="form-control" name="description_en" id="description" rows="3" placeholder="Enter description"></textarea>
            </div>
            <div class="mb-3">
                <label for="content" class="form-label text-black">Content EN</label>
                <textarea class="summernote" name="content_en"></textarea>
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
    <div class="row mt-3">
        <div class="mb-3 col-6">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" name="upload_image">
        </div>
        <div class="mb-3 col-6">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select" id="status">
                        <option value="Active">Active</option>
                        <option value="UnActive">UnActive</option>
                        <option value="Expired">Expired</option>
                        <option value="Closed">Closed</option>
            </select>
        </div>
    </div>
    <input type="submit" class="btn-create btn btn-success text-white" value="Create"></input>
</form>
@endsection