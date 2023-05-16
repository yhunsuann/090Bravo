@extends('layout.layout')
@section('content')
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @php Session::forget('success'); @endphp @endif
            <h1 class="mb-4">Create Cruitments</h1>
            <form action="{{ URL::to('/add-recruitment')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" id="title" placeholder="Enter title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter content"></textarea>
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
                <input type="submit" class="btn btn-success text-white" value="Create"></input>
            </form> 
@endsection