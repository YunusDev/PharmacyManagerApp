@extends('admin.layouts.app')


@section('content')


    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title"> Add an Admin</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <div class="col-lg-6 col-lg-offset-3">
                            @include('includes.form_error')
                        </div>
                        <form role="form" method="post" action="{{route('admins.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="box-body">
                                <div class="col-lg-6  col-lg-offset-3">
                                    <div class="form-group col-lg-12 ">
                                        <label for="name col-lg-6"> Name</label>
                                        <input type="text" class="form-control"value="{{old('name')}}" name="name" id="name" placeholder="Enter  username">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="email"> Email</label>
                                        <input type="email" class="form-control" value="{{old('email')}}" name="email" id="email" placeholder="Enter  email ">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="photo_id">Profile Pic</label>
                                        <input type="file" id="photo_id" name="photo_id">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="phone">Phone Number</label>
                                        <input type="number" class="form-control"  value="{{old('phone')}}" name="phone" id="phone" placeholder="Enter  number ">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="password">Password:</label>
                                        <input type="password" class="form-control" value="{{old('password')}}" name="password" id="password" placeholder="Enter password">
                                    </div>
                                    <div class="form-group col-lg-6">
                                        <label for="password_confirmation">Password Confirmation:</label>
                                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Enter password">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <label for="status">Status </label>
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="status" id="status" @if(old('status') == 1)checked @endif  value="1">Status</label>
                                        </div>
                                    </div>
                                    <div class="form-group row col-lg-12">
                                        @foreach($roles as $role)
                                        <div class="col-lg-3 col-xs-3">
                                        <label >{{$role->name}}</label>
                                            <input name="role[]" type="checkbox" value="{{$role->id}}">
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{route('admins.index')}}" class="btn btn-danger">Back</a>
                                    </div>
                                </div>

                            </div>



                        </form>

                    </div>
                    <!-- /.box -->


                </div>
                <!-- /.col-->
            </div>
            <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@section('scripts')



@endsection


@endsection