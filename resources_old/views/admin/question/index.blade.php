@extends('admin.layouts.master')
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Internal Example</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Questions</a></li>
                        <li class="breadcrumb-item active">All Questions</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>All</strong> Questions </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable" id="myTable">
                                <thead>
                                <tr>
                                    <th>Question Text</th>
                                    <th>Question Percentage</th>
                                    <th>Question Order</th>
                                    <th>Action</th>

                                </tr>
                                </thead>

                                <tbody>
                                @foreach($questions as $item)

                                    <tr>
                                        <td>{{$item->text }}</td>
                                        <td>{{$item->percentage }}</td>
                                        <td>{{$item->order }}</td>

                                        <td>
                                            <a class="btn btn-primary" href="{{ route('question.edit',$item->id) }}">Edit</a>
                                            <a class="btn btn-danger" href="{{ route('question.delete',$item->id) }}">Delete</a>

                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
