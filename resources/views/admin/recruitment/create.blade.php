@extends('admin.layout.layout') 
@section('content') 
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @php Session::forget('success'); 
        @endphp 
    @endif
<h4 class="mb-4">Create Cruitments</h4>
<h5 class="title-create">Form create</h5>
<form class="form-create bg-white p-4" action="{{ URL::to('/admin/recruitment/add')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <ul class="nav nav-pills" id="pills-tab" role="tablist">
        @forelse ($result as $key => $data)
        <input type="hidden" name="count[{{ $key }}]" value="{{ $loop->index }}">
            <li class="nav-item" role="presentation">
                <button class="nav-link px-5 rounded-0 lang{{ $key == 0 ? ' active' : '' }}" id="{{ $data->language_code }}" data-coreui-toggle="pill" data-coreui-target="#{{ $data->language_name }}" type="button" role="tab" aria-controls="{{ $data->language_name }}" aria-selected="{{ $key == 0 ? 'true' : 'false' }}">{{ $data->language_name }}</button>
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
        @forelse ($result as $key => $data)
            <div class="tab-pane fade{{ $key == 0 ? ' show active' : '' }}" id="{{ $data->language_name }}" role="tabpanel" aria-labelledby="{{ $data->language_code }}" tabindex="0">
                <div class="mb-3">
                    <label for="title" class="form-label text-black">Title {{ $data->language_code }}</label>
                    <input type="text" class="form-control" name="title[]" id="title" placeholder="Enter title">
                    <input type="hidden" class="form-control" name="language_code[]" id="title" placeholder="Enter title" value="{{ $data->language_code }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label text-black">Description {{ $data->language_code }}</label>
                    <textarea class="form-control" name="description[]" id="description" rows="3" placeholder="Enter description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label text-black">Content {{ $data->language_code }}</label>
                    <textarea class="summernote" name="content[]"></textarea>
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
                    <textarea class="form-control" name="description[]" id="description" rows="3" placeholder="Enter description"></textarea>
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
                    <textarea class="form-control" name="description[]" id="description" rows="3" placeholder="Enter description"></textarea>
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
        </div>
        <div class="mb-3 col-6 pt-4">
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