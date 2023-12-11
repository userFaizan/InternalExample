@extends('admin.layouts.master')
@section('content')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Internal Example</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('dashboard')}}"><i class="zmdi zmdi-home"></i> Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Questions Options</a></li>
                        <li class="breadcrumb-item active">All Question Options</li>
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
        <!-- Horizontal Layout -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Edit</strong> Question Options</h2>
                    </div>
                    <div class="body">
                        <form id="ajax-request" method="post" action="{{route('questionoption.update',$questionOptions->id)}}" enctype="multipart/form-data" class="" data-redirect-url="{{ route('questionoption.index') }}">
                            @csrf
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="name">Select Question</label>
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <select name="question_id" id="question_id"
                                                    class="form-control show-tick ms " aria-describedby="category"
                                                    required>
                                                <option value="" selected>Select Question</option>
                                                @foreach($questions as $item)
                                                    <option value="{{ $item->id }}" {{ $item->id === $questionOptions->question_id ? 'selected' : '' }}>{{ $item->text }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="name">Question Option</label>
                                </div>
                                <div class="col-lg-10 col-md-10 col-sm-8">
                                    <div class="form-group">
                                        <input type="text" id="option_values" name="option_values" value="{{$questionOptions->option_values}}" class="form-control" placeholder="Enter your Question  Option">
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-2 col-md-2 col-sm-4 form-control-label">
                                    <label for="name">Is Correct?</label>
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <select name="is_correct" id="is_correct"
                                                    class="form-control show-tick ms " aria-describedby="is_correct"
                                                    required>
                                                <option value="" selected>Please Select</option>
                                                <option value="1" {{ $questionOptions->is_correct == 1 ? 'selected' : '' }}>true</option>
                                                <option value="0" {{ $questionOptions->is_correct == 0 ? 'selected' : '' }}>false</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">
                                <div class="col-sm-8 offset-sm-2">
                                    <button type="submit" class="btn btn-raised btn-primary btn-round waves-effect">Submit</button>
                                    <div class="errorMsgntainer"></div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
