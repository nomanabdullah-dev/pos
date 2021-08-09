@extends('layouts.app')

@section('content')
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <h4 class="pull-left page-title">Employee</h4>
                    <ol class="breadcrumb pull-right">
                        <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('employee.index') }}">Employee</a></li>
                        <li class="active">Create</li>
                    </ol>
                </div>
            </div>
            <!-- Start Widget -->
            <div class="row">
                {{-- <div class="col-md-2"></div> --}}
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <div class="panel panel-default">
                        <div class="panel-heading d-flex justify-content-between align-items-center">
                            <h3 style="display: inline" class="panel-title">Update Employee</h3>
                            <a href="{{ route('employee.index') }}" class="btn btn-success" style="float: right">Back</a>
                        </div>
                        <div class="panel-body">
                            <form  class="form-horizontal" role="form" action="{{ route('employee.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="col-sm-3 form-control" name="name" value="{{ $employee->name }}" placeholder="Enter name">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-3 control-label">Email Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="email" value="{{ $employee->email }}" placeholder="Enter email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone" class="col-sm-3 control-label">Phone Number</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="phone" value="{{ $employee->phone }}" placeholder="Enter phone">
                                        @error('phone')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address" class="col-sm-3 control-label">Address</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="address" value="{{ $employee->address }}" placeholder="Enter address">
                                        @error('address')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="experience" class="col-sm-3 control-label">Experience</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="experience" value="{{ $employee->experience }}" placeholder="Enter experience">
                                        @error('experience')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="nid" class="col-sm-3 control-label">NID</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="nid" value="{{ $employee->nid }}" placeholder="Enter nid">
                                        @error('nid')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="salary" class="col-sm-3 control-label">Salary</label>
                                    <div class="col-sm-9">
                                        <input type="number" class="form-control" name="salary" value="{{ $employee->salary }}" placeholder="Enter salary">
                                        @error('salary')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="vacation" class="col-sm-3 control-label">Vacation</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="vacation" value="{{ $employee->vacation }}" placeholder="Enter vacation">
                                        @error('vacation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city" class="col-sm-3 control-label">City</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="city" value="{{ $employee->city }}" placeholder="Enter city">
                                        @error('city')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="photo" class="col-sm-3 control-label">New Photo</label>
                                    <div class="col-sm-9">
                                        <img src="#" id="image" >
                                        <input type="file" class="form-control-file upload" name="photo" accept="image/*" onchange="readURL(this)">
                                        @error('photo')
                                            <span class="invalid-feedback" role="alert">
                                                <strong style="color: red">{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-3 col-sm-9">
                                        <img src="{{ asset($employee->photo) }}" width="100px" name="old_photo">
                                    </div>
                                </div>

                                <div class="form-group m-b-0">
                                    <div class="col-sm-offset-3 col-sm-9">
                                      <button type="submit" class="btn btn-purple waves-effect waves-light" style="margin-top: 10px">Update</button>
                                    </div>
                                </div>
                            </form>

                        </div><!-- panel-body -->
                    </div> <!-- panel -->
                </div>
            </div>

        </div> <!-- container -->
    </div> <!-- content -->
</div>


@endsection
