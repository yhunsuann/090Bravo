@extends('admin.layout.layout') @section('content')
<h4 class="mb-4">Blogs</h4>
<div class="row">
    <div class="col p-0">
        <h6 class="title">Search</h6>
    </div>
</div>
<form class="mb-0" action="{{ URL::to('/admin/blog/search') }}" method="get">
    <div class="row search">
        <div class="col">
            @csrf
            <div class="row p-0">
                <div class="col-sm-6">
                    <label  class="label-search" for="">Keyword</label>
                    <input class="mx-auto keyword" type="text" placeholder="Keyword" name="keyword" id="">
                </div>
                <div class="col-sm-6">
                    <label  class="label-search" for="">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                        <option selected="selected" value="">Select...</option>
                        <option value="Active">Active</option>
                        <option value="InActive">InActive</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col p-0 bottom-search">
            <input type="submit" class="py-1 btn-search btn btn-primary float-end m-2 mr-0 " value="Search"></input>
            <a href="{{URL::to('/admin/blog')}}" class="py-1 btn btn-secondary float-end m-2 text-white" value="Reset">Reset</a>
        </div>
    </div>
</form>
<form action="{{ URL::to('/admin/blog/delete-select') }}" method="post">
    @csrf
    <div class="row my-3">
        <div class="col">
            <a href="{{ URL::to('/blog/create') }}" type="button" class="btn btn-outline-success float-end m-2 mr-0">Create</a>
            <input type="submit" class="delete_all btn-delete btn btn-danger float-end m-2" value="Delete all select"></input>
        </div>
    </div>
    <div class="row">
        <div class="col p-0">
            <h6 class="title">List blogs</h6>
        </div>
    </div>
    <div class="row">
        <div class="col col-table px-3 bg-white" style="overflow-x:auto;">
            <table class="table caption-top bg-white table table-striped">
                <thead>
                    <tr class="py-3">
                        <th class="text-center"><input type="checkbox" id="checkAll"></th>
                        <th scope="col"><b>Title</b></th>
                        <th scope="col"><b>Image</b></th>
                        <th scope="col"><b>Status</b></th>
                        <th scope="col"><b>Create_at</b></th>
                        <th scope="col" class="text-center"><b>Action</b></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                @forelse($result as $data)
                     <tr>
                        <th class="text-center"><input name="ids[]" class="sub_chk" value="{{$data->id}}" id="checkItem" type="checkbox">
                        </th>
                        <td class="truncate">{{ $data->blogTranslates->first()->title }}</td>
                        <td><img width="70px" height="40px" src="{{ asset('assets/img/blog/'.$data->image)}}" alt=""></td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->created_at}}</td>
                        <td class="text-center">
                            <a data-id="{{ $data->id }}" type="button" data-coreui-toggle="modal" data-coreui-target="#deleteBlog" class=" btn-delete btn btn-danger open-modal-blog"><i class="fa fa-solid fa-trash"></i></a>
                            <a href="{{ URL::to('/admin/blog/edit/'.$data->id)}}" type="button" class="btn-search btn btn-primary"><i class="fa fa-solid fa-wrench"></i></a>
                        </td>
                    </tr>
                    @empty
                    <td>No Data</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</form>
{{$result->appends($_GET)->links()}} 
@endsection