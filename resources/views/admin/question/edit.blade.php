@extends('admin.layouts.master')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
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
                            <li class="breadcrumb-item active">Edit Questions</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit Questions</h3>
                            </div>
                            <div class="errorMsgntainer"></div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="ajax-request" method="post" action="{{route('question.update',$questions->id)}}"
                                  enctype="multipart/form-data" class=""
                                  data-redirect-url="{{ route('question.index') }}">
                                @csrf
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Question Text</label>
                                        <input type="text" name="text" value="{{$questions->text}}" class="form-control" id="exampleInputName"
                                               placeholder="Enter Question text">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Question Percentage</label>
                                        <input type="number" name="percentage" value="{{$questions->percentage}}" class="form-control"
                                               id="exampleInputEmail1"
                                               placeholder="Enter Question percentage">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Question Order</label>
                                        <input type="number" name="order" value="{{$questions->order}}"  class="form-control"
                                               id="exampleInputPassword1"
                                               placeholder=" Question Order">
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </section>

        <!-- /.content -->
    </div>

@endsection



