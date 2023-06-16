@extends('admin.layout.layout') @section('content')
@include('admin.layout.partials.flag')
<h4 class="mb-4">Blogs</h4>
<div class="row">
    <div class="col p-0">
        <h6 class="title">Search</h6>
    </div>
</div>
<form class="mb-0" method="get">
    <div class="row search">
        <div class="col">
            <div class="row p-0">
                <div class="col-sm-6">
                    <label  class="label-search" for="">Keyword</label>
                    <input class="mx-auto keyword" autocomplete="off" type="text" value="{{ request()->keyword }}" placeholder="Keyword" name="keyword" id="">
                </div>
                <div class="col-sm-6">
                    <label  class="label-search" for="">Status</label>
                    <select class="form-select" aria-label="Status select" name="status" style="width: 100%">
                        <option selected="selected" value="">Please select...</option>
                        <option value="active" @if(request()->keyword == 'active') selected @endif>Active</option>
                        <option value="inactive" @if(request()->keyword == 'inactive') selected @endif>Inactive</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col p-0 bottom-search">
            <input type="submit" class="py-1 btn-search btn btn-primary float-end m-2 mr-0 " value="Search"></input>
            <input type="reset" class="py-1 btn btn-secondary float-end m-2 text-white btn-size" value="Reset">Reset</a>
        </div>
    </div>
</form>
<form action="{{ route('admin.blog.deletes') }}" method="post">
    @csrf
    <div class="row mt-3">
        <div class="col p-0">
            <h6 class="title">List blogs
                <input type="submit" class="delete_all btn-sm btn-delete btn btn-outline-danger float-end btn-size" value="Delete all select"></input>
            </h6>
        </div>
    </div>
    <div class="row">
        <div class="col col-table px-3 bg-white" style="overflow-x:auto;">
            <table class="table caption-top bg-white table table-striped">
                <thead>
                    <tr class="py-3">
                        <th class="text-center">
                            @if(count($blogs))
                                <input type="checkbox" id="checkAll">
                            @else 
                                #
                            @endif
                        </th>
                        <th scope="col" width="40%"><b>Title</b></th>
                        <th scope="col"><b>Image</b></th>
                        <th scope="col"><b>Status</b></th>
                        <th scope="col"><b>Create_at</b></th>
                        <th scope="col" class="text-center"><b>Action</b></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($blogs as $key => $item)
                        <tr>
                            <th class="text-center"><input name="ids[]" class="sub_chk" value="{{$item->id}}" id="checkItem" type="checkbox">
                            </th>               
                            <td>{{ $item->blog_default->title }}</td>
                            <td><img height="40px" src="{{ asset('assets/img/blog/' . $item->image)}}" alt=""></td>
                            <td>{{ $item->status }}</td>
                            <td>{{ $item->created_at}}</td>
                            <td class="text-center">
                                <a data-id="{{ $item->id }}" type="button" data-coreui-toggle="modal" m-type="blog" data-coreui-target="#exampleModal" class="open-modal"><i class="fa fa-solid fa-trash"></i></a> &nbsp;
                                <a href="{{ route('admin.blog.edit', $item->id) }}" type="button" class="cursor-pointer"><i class="fa fa-solid fa-wrench"></i></a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td align="center" colspan="6">No Data...</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="pagination--custom row">
                <div class="col-6 pagination-info">
                    @php
                        $from = ($blogs->currentPage() - 1) * $blogs->perPage();
                        $to = $blogs->currentPage() * $blogs->perPage();
                        $total = $blogs->total()
                    @endphp
                    Showing {{ $from }} to {{ $to < $total ? $to : $total  }} of {{ $total }} entries
                </div>
                <div class="pagination-box col-6">
                    {{ $blogs->appends($_GET)->links() }}
                </div>
            </div>
        </div>
    </div>
</form>
@endsection