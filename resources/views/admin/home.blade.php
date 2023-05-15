@extends('layout.layout') @section('content')
<div class="row">
    @if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
    @php Session::forget('success'); @endphp @endif
    <div class="col">
        <form class="mb-0" action="{{ URL::to('/search') }}" method="get">
            @csrf
            <div class="row p-0">
                <div class="col-sm-6">
                    <input class="mx-auto keyword" type="text" placeholder="Keyword" name="keyword" id="">
                    <select class="form-select" aria-label="Default select example" name="status">
                            <option selected="selected" value="">Select Status</option>
                            <option value="Active">Active</option>
                            <option value="UnActive">UnActive</option>
                            <option value="Expired">Expired</option>
                            <option value="Closed">Closed</option>
                </select>
                </div>
                <div class="col-sm-6">
                    <div>
                        <div class="datepicker date input-group mt-0 mx-auto">
                            <input name="dateFrom" type="text" placeholder="From date" class="form-control" id="fecha1">
                            <div class="input-group-append">
                                <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="datepicker date input-group mx-auto">
                            <input name="dateTo" type="text" placeholder="To day" class="form-control" id="fecha1">
                            <div class="input-group-append">
                                <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col">
                        <input type="submit" class="btn-search btn btn-primary float-end m-2 mr-0 " value="Search"></input>
                        <a href="{{URL::to('/home')}}" class="btn btn-secondary float-end m-2 text-white" value="Reset">Reset</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<form action="{{ URL::to('/delete-select') }}" method="post">
    @csrf
    <div class="row">
        <div class="col">
            <a href="{{ URL::to('/create') }}" type="button" class="btn btn-outline-success float-end m-2 mr-0">Create</a>
            <input type="submit" class="delete_all btn-delete btn btn-danger float-end m-2" value="Delete all select"></input>
        </div>
    </div>
    <div class="row">
        <div class="col" style="overflow-x:auto;">
            <table class="table bg-white">
                <thead class="thead-table">
                    <tr class="py-3">
                        <th class="text-center"><input type="checkbox" id="checkAll"></th>
                        <th scope="col"><b>Title</b></th>
                        <th scope="col"><b>Image</b></th>
                        <th scope="col"><b>Status</b></th>
                        <th scope="col"><b>Create_at</b></th>
                        <th scope="col" class="text-center"><b>Action</b></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($result as $data)
                    <tr>
                        <th class="text-center"><input name="ids[]" class="sub_chk" value="{{$data->id}}" id="checkItem" type="checkbox">
                        </th>
                        <td>{{ $data->title }}</td>
                        <td><img width="100px" height="50px" src="{{ asset('assets/img/cruitments/'.$data->image)}}" alt=""></td>
                        <td>{{ $data->status }}</td>
                        <td>{{ $data->created_at}}</td>
                        <td class="text-center">
                            <a data-id="{{ $data->id }}" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModal" class=" btn-delete btn btn-danger open-modal"><i class="fa fa-solid fa-trash"></i></a>
                            <a href="{{ URL::to('/edit/'.$data->id)}}" type="button" class="btn-search btn btn-primary"><i class="fa fa-solid fa-wrench"></i></a>
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
{{$result->links()}} @endsection