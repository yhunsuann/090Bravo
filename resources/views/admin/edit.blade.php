@extends('layout.layout')
@section('content')
    <h4 class="mb-4">Edit Cruitments</h4>
    <h5 class="title-create">Form edit</h5>
    <form class="form-create bg-white p-4" action="{{ URL::to('/update-recruitment/'.$data->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="title" value="{{ $data->title }}" placeholder="Enter title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="description" rows="3" value="{{ $data->description }}" placeholder="Enter description">{{ $data->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea value="{{ $data->content }}" class="summernote"  rows="5" name="content">{{ $data->content }}</textarea>
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