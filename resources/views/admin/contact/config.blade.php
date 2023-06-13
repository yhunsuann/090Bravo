@extends('admin.layout.layout') @section('content')
<h5 class="title-create">Contact config</h5>
<form class="form-create bg-white p-4" action="{{ URL::to('/admin/contact/config/save')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="container p-0" id="container-form">
        @forelse($result as $data)
        <div class="mb-3">
            <div class="row">
                <div class="col-2">
                    <label for="title" class="form-label text-black lable_add_contact">{{ $data->name }}</label>
                    <input type="hidden" name="{{ $data->contact_key }}[name]" value="{{ $data->name }}">
                    <input type="hidden" name="{{ $data->contact_key }}[type]" value="{{ $data->type }}">
                    <input class='contact_key' type="hidden" id="contact_key" name="{{ $data->contact_key }}[contact_key]" value="{{ $data->contact_key }}">
                </div>
                @if($data->type == 'text')
                <div class="col-10">
                    <input type="text" name="{{ $data->contact_key}}[value]" class="form-control edit-field" id="title" placeholder="Enter title" value="{{ $data->value }}">
                </div>
                @elseif ($data->type == 'image')
                <div class="col-10">
                    <img class="image-contact" src="{{ asset('assets/img/contact/' . $data->value) }}" alt="image">
                    <input type="file" name="{{ $data->contact_key }}[value]" class="form-control upload_image edit-field" name="upload_image">
                </div>
                @elseif ($data->type == 'textarea')
                <div class="col-10">
                    <textarea class="form-control edit-field" name="{{ $data->contact_key }}[value]" id="description" rows="3" placeholder="Enter description">{{ $data->value }}</textarea>
                </div>
                @else
                <div class="col-10">
                    <textarea name="{{ $data->contact_key }}[value]" class="summernote edit-field">{{ $data->value }}</textarea>
                </div>
                @endif
            </div>
        </div>
        @empty
        <p>No data available</p>
        @endforelse
    </div>
    <div class="div_add_contact px-2">
        <div class="row py-3 px-2 row_add_contact">
            <div class="col-lg-4 my-2">
                <div class="row">
                    <div class="col-2">
                        <label for="image" class="form-label lable_add_contact">Name</label>
                    </div>
                    <div class="col-10">
                        <input id="name" class="form-control " type="text" placeholder="Name">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-2">
                <div class="row">
                    <div class="col-2">
                        <label for="image" class="form-label lable_add_contact">Key</label>
                    </div>
                    <div class="col-10">
                        <input id="key" class="form-control" type="text" placeholder="Key">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-2">
                <div class="row">
                    <div class="col-2">
                        <label for="image" class="form-label lable_add_contact">Type</label>
                    </div>
                    <div class="col-10">
                        <select id="type" class="form-select type-contact" id="status">
                                    <option value="option-default">-- Select type --</option>
                                    <option value="image">Image</option>
                                    <option value="text">Text</option>
                                    <option value="textarea">Textarea</option>
                                    <option value="texteditor">exteditor</option>
                                </select>
                    </div>
                </div>
            </div>
            <div class="col-lg-1 my-2">
                <a id="add_contact" class="add_contact btn btn-success text-white float-end px-3">Add</a>
            </div>
        </div>
        <input type="submit" class="btn btn-search btn-primary btn m-2 mr-0 mt-4 py-1 text-white" value="Save"></input>
</form>
@endsection