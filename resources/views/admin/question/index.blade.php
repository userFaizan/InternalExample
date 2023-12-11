
@extends('admin.layouts.master')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Internal Example</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Question List</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Question List</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive">
                                <table class="table table-hover text-nowrap" id="myTable">
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
                                                <a class="btn btn-primary"
                                                   href="{{ route('question.edit',$item->id) }}">Edit</a>
                                                <a class="btn btn-danger"
                                                   href="{{ route('question.delete',$item->id) }}">Delete</a>

                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection
