@extends('admin.layout.layout') @section('content')
<div class="row">
    <div class="col p-0">
        <h5 class="mb-4">Contacts</h5>
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
<form class="mb-0" action="{{ route('admin.contact.search') }}" method="get">
    <div class="row search">
        <div class="col">
            @csrf
            <div class="row p-0">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col d-flex">
                            <label class="label-search" for="">Name</label>
                            <input class="mx-auto keyword" autocomplete="off" value="{{ request()->name }}" type="text" placeholder="Name" name="name" id="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="datepicker date d-flex mt-0 mx-auto">
                                <label class="label-search" for="">Date From</label>
                                <div class="input-group">
                                    <input name="dateFrom" autocomplete="off" value="{{ request()->dateFrom }}" type="text" placeholder="From date" class="form-control date-picker" id="fecha1">
                                    <div class="input-group-append">
                                        <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col d-flex">
                        <label class="label-search" for="">Messages</label>
                        <input class="mx-auto keyword" autocomplete="off" type="text" value="{{ request()->messages }}" placeholder="Messages" name="messages" id="">
                    </div>
                    <div>
                        <div class="datepicker date d-flex mx-auto">
                            <label class="label-search" for="">Date to</label>
                            <div class="input-group">
                                <input name="dateTo" autocomplete="off" type="text" value="{{ request()->dateTo }}" placeholder="To day" class="form-control date-picker" id="fecha1">
                                <div class="input-group-append">
                                    <span class="input-group-text h-100"><i class="fa fa-calendar"></i></span>
                                </div>
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
            <input type="reset" class="btn-reset btn btn-secondary text-dark float-end m-2 py-1" value="Reset" />
        </div>
    </div>
</form>
@csrf
<div class="row mt-5">
    <div class="col p-0">
        <h6 class="title">List Contacts</h6>
    </div>
</div>
<div class="row">
    <div class="col col-table px-3 bg-white" style="overflow-x:auto;">
        <table class="table caption-top bg-white table table-striped">
            <thead>
                <tr class="py-3">
                    <th scope="col"><b>Full name</b></th>
                    <th scope="col"><b>Email</b></th>
                    <th scope="col"><b>Phone</b></th>
                    <th scope="col" class="text-center"><b>Date contact</b></th>
                    <th scope="col" class="see-details text-center"><b>Action</b></th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse($result as $data)
                <tr>
                    <td>{{ $data->full_name }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->phone }}</td>
                    <td class="text-center">{{ $data->created_at }}</td>
                    <td class="text-center">
                        <a data-id="{{ $data->id }}" m-type="contact" type="button" data-coreui-toggle="modal" data-coreui-target="#exampleModal" class="open-modal"><i class="fa fa-solid fa-trash delete-contact"></i></a>
                        <button data-coreui-toggle="modal" data-coreui-target="#contact_{{ $data->id }}" class="btn btn-primary m-2 py-1 btn-see-detail"><i class="fa fa-eye" aria-hidden="true"></i></button>
                    </td>
                </tr>
                @empty
                    <td align="center" colspan="5">No data</td>
                @endforelse
            </tbody>
        </table>
        <div class="pagination--custom row">
            <div class="col-6 pagination-info">
                @php
                    $from = ($result->currentPage() - 1) * $result->perPage();
                    $to = $result->currentPage() * $result->perPage();
                    $total = $result->total()
                @endphp
                Showing {{ $from }} to {{ $to < $total ? $to : $total  }} of {{ $total }} entries
            </div>
            <div class="pagination-box col-6">
                {{ $result->appends($_GET)->links() }}
            </div>
        </div>
    </div>
</div>
@foreach($result as $data)
    <div class="modal fade table-modal" id="contact_{{ $data->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg bg-white">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title" id="exampleModalLabel">Information Contact</h6>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-3">
                    <table class="bg-white table  mb-0">
                        <tbody>
                            <tr>
                                <td class="th-table">
                                    <b>Full name</b>
                                </td>
                                <td>
                                    {{ $data->full_name }}
                                </td>
                            </tr>
                            <tr>
                                <td class="th-table">
                                    <b>Email</b>
                                </td>
                                <td>
                                    {{ $data->email }}
                                </td>
                            </tr>
                            <tr>
                                <td class="th-table">
                                    <b>Phone</b>
                                </td>
                                <td>
                                    {{ $data->phone }}
                                </td>
                            </tr>
                            <tr>
                                <td class="th-table">
                                    <b>Date contact</b>
                                </td>
                                <td>
                                    {{ $data->created_at }}
                                </td>
                            </tr>
                            <tr>
                                <td class="th-table">
                                    <b>Message</b>
                                </td>
                                <td>
                                    {{ $data->message }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection