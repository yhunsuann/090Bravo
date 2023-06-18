@extends('admin.layout.layout') 

@section('content')
    <div class="row">
        <div class="col p-0">
            <h5 class="mb-4">Recruitments</h5>
        </div>
    </div>
    @include('admin.layout.partials.flag')
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
                        <div class="d-flex">
                            <label class="label-search" for="">Keyword</label>
                            <div class="input-group">
                                <input class="mx-auto keyword" type="text" autocomplete="off" placeholder="Keyword" name="keyword" value="{{ request()->keyword }}">
                            </div>
                        </div>
                        <div class="datepicker date d-flex  mt-0 mx-auto">
                            <label class="label-search" for="">Date From</label>
                            <div class="input-group">
                                <input name="dateFrom" type="text" value="{{ request()->dateFrom }}" placeholder="From date" class="form-control date-picker" id="fecha1">
                                <div class="input-group-append">
                                    <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex">
                            <label class="label-search" for="">Status</label>
                            <div class="input-group">
                                <select class="form-select" aria-label="Default select example" name="status">
                                    <option selected="selected" value="">Please select...</option>
                                    <option value="active" @if(request()->status == 'active') selected @endif>Active</option>
                                    <option value="inactive" @if(request()->status == 'inactive') selected @endif>Inactive</option>
                                </select>
                            </div>
                        </div>
                        <div class="datepicker date mx-auto d-flex">
                            <label class="label-search" for="">Date to</label>
                            <div class="input-group">
                                <input name="dateTo" type="text" value="{{ request()->dateTo }}" placeholder="To day" class="form-control date-picker" id="fecha1">
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
                <input type="submit" class="btn-search btn btn-primary float-end m-2 mr-0 py-1" value="Search" />
                <input type="reset" class="btn-reset btn btn-secondary text-dark float-end m-2 py-1 btn-size" value="Reset" />
            </div>
        </div>
    </form>
    <form action="{{ route('admin.recruitment.deletes') }}" id="form-delete" method="post">
        @csrf
        <div class="row mt-3">
            <div class="col p-0">
                <h6 class="title">List Recruitments
                    <input type="button" m-type="recruitment" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModal" class="open-modal delete_all btn-sm btn-delete btn btn-outline-danger float-end btn-size" value="Delete all select"></input>
                </h6>
            </div>
        </div>
        <div class="row">
            <div class="col col-table px-3 bg-white" style="overflow-x:auto;">
                <table class="table caption-top bg-white table table-striped table-hover mb-1">
                    <thead>
                        <tr class="py-3">
                            <th class="text-center">
                                @if(count($recruitments))
                                    <input type="checkbox" id="checkAll">
                                @else 
                                    #
                                @endif 
                            </th>
                            <th scope="col" width="40%"><b>Title</b></th>
                            <th scope="col"><b>Image</b></th>
                            <th scope="col"><b>Status</b></th>
                            <th scope="col"><b>Create At</b></th>
                            <th scope="col"class="text-center"><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @forelse($recruitments as $item)
                            <tr>
                                <th class="text-center">
                                    <input name="ids[]" class="sub_chk" value="{{ $item->id }}" id="checkItem" type="checkbox">
                                </th>
                                <td>{{ $item->recruitment_default->title }}</td>          
                                <td><img height="40px" src="{{ asset('assets/img/recruitments/' . $item->image)}}" alt=""></td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->created_at}}</td>
                                <td class="text-center action-form">
                                    <a data-id="{{ $item->id }}" m-type="recruitment" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModal" class="open-modal"><i class="fa fa-solid fa-trash"></i></a> &nbsp;
                                    <a href="{{ route('admin.recruitment.edit', $item->id) }}" class="cursor-pointer"><i class="fa fa-solid fa-wrench"></i></a>
                                </td>
                            </tr>
                        @empty 
                        <td colspan="6" class="text-center">No data...</td>
                        @endforelse
                    </tbody>
                </table>
                <div class="pagination--custom row">
                    <div class="col-6 pagination-info">
                        @php
                            $from = ($recruitments->currentPage() - 1) * $recruitments->perPage();
                            $to = $recruitments->currentPage() * $recruitments->perPage();
                            $total = $recruitments->total()
                        @endphp
                        Showing {{ $from }} to {{ $to < $total ? $to : $total  }} of {{ $total }} entries
                    </div>
                    <div class="pagination-box col-6">
                        {{ $recruitments->appends($_GET)->links() }}
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
