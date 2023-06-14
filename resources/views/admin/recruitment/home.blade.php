@extends('admin.layout.layout') @section('content')
<div class="row">
    <div class="col p-0">
        <h5 class="mb-4">Recruitments</h5>
    </div>
</div>
@if(session()->has('success'))
<div class="alert alert-success">
    {{ session()->get('success') }}
</div>
@php Session::forget('success'); @endphp @endif
<div class="row">
    <div class="col p-0">
        <h6 class="title">Search</h6>
    </div>
</div>
<form class="mb-0" action="{{ route('admin.recruitment.search') }}" method="get">
    <div class="row search">
        <div class="col">
            @csrf
            <div class="row p-0">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col">
                            <label class="label-search" for="">Keyword</label>
                            <input class="mx-auto keyword" type="text" placeholder="Keyword" name="keyword" id="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <div class="datepicker date input-group mt-0 mx-auto">
                                    <label class="label-search" for="">Date From</label>
                                    <input name="dateFrom" type="text" placeholder="From date" class="form-control date-picker" id="fecha1">
                                    <div class="input-group-append">
                                        <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <label class="label-search" for="">Status</label>
                    <select class="form-select" aria-label="Default select example" name="status">
                                    <option selected="selected" value="">Select...</option>
                                    <option value="Active">Active</option>
                                    <option value="UnActive">UnActive</option>
                                    <option value="Expired">Expired</option>
                                    <option value="Closed">Closed</option>
                        </select>
                    <div>
                        <div class="datepicker date input-group mx-auto">
                            <label class="label-search" for="">Date to</label>
                            <input name="dateTo" type="text" placeholder="To day" class="form-control date-picker" id="fecha1">
                            <div class="input-group-append">
                                <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col p-0 bottom-search">
            <input type="submit" class="btn-search btn btn-primary float-end m-2 mr-0 py-1" value="Search"></input>
            <a href="{{ route('index') }}" class="btn-reset btn btn-secondary text-dark float-end m-2 py-1 btn-size" value="Reset">Reset</a>
        </div>
    </div>
</form>
<form action="{{ route('admin.recruitment.delete-select') }}" method="post">
    @csrf
    <div class="row my-3">
        <div class="col">
            <a href="{{ route('admin.recruitment.create') }}" type="button" class="btn btn-success float-end m-2 mr-0 text-white btn-size">Create</a>
            <input type="submit" class="delete_all btn-delete btn btn-danger float-end m-2 text-white btn-size" value="Delete all select"></input>
        </div>
    </div>
    <div class="row">
        <div class="col p-0">
            <h6 class="title">List recruitments</h6>
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
                        <th scope="col"><b>Create At</b></th>
                        <th scope="col" class="text-center"><b>Action</b></th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @forelse($result as $data)
                    @forelse($data->recruitmentTranslates as $recruitment)
                        @if($recruitment->language_code == 'vi')
                    <tr>
                        <th class="text-center"><input name="ids[]" class="sub_chk" value="{{$data->id}}" id="checkItem" type="checkbox">
                        </th>
                        <td>{{ $recruitment->title }}</td>          
                        <td><img width="70px" height="40px" src="{{ asset('assets/img/cruitments/'.$data->image)}}" alt=""></td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->created_at}}</td>
                        <td class="text-center">
                            <a data-id="{{ $data->id }}" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModal" class=" btn-delete btn btn-danger open-modal text-white"><i class="fa fa-solid fa-trash"></i></a>
                            <a href="{{ route('admin.recruitment.edit',['id' => $data->id]) }}" type="button" class="btn-search btn btn-primary"><i class="fa fa-solid fa-wrench"></i></a>
                        </td>
                    </tr>
                    @endif
                        @empty 
                        <td>No data</td>
                        @endforelse
                    @empty
                    <td>No Data</td>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</form>
{{$result->appends($_GET)->links()}} @endsection