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
                            <li class="breadcrumb-item active">Add Question Options</li>
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
                                <h3 class="card-title">Add Question Options</h3>
                            </div>
                            <div class="errorMsgntainer"></div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form id="ajax-request" method="post" action="{{route('questionoption.store')}}"
                                  enctype="multipart/form-data" class=""
                                  data-redirect-url="{{ route('questionoption.index') }}">

                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Select Question</label>
                                        <select class="form-control select2" name="question_id" style="width: 100%;">
                                            <option>Please Select</option>
                                        @foreach($questions as $item)
                                                <option value="{{ $item->id }}">{{ $item->text }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Question Option</label>
                                        <input type="text" name="option_values" class="form-control"
                                               id="exampleInputEmail1"
                                               placeholder="Enter Question percentage">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Is Correct</label>
                                            <select class="form-control select2" name="is_correct" style="width: 100%;">
                                                <option>Please Select</option>
                                                <option value="1">true</option>
                                                    <option value="0">false</option>

                                            </select>
                                        </div>
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



