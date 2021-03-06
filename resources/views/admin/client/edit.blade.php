@extends('admin.layouts.app')


@section('content')


    <div class="content-wrapper">

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">

                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Edit a Client Detail</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{route('client.update', $client->id)}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            {{method_field('PATCH')}}
                            <div class="box-body">
                                <div class="col-lg-6 col-lg-offset-3">
                                    <div class="form-group">
                                        <label for="name"> Client Name</label>
                                        <input type="text" class="form-control" value="@if(old('name')) {{old('name')}} @else {{$client->name}} @endif"  name="name" id="name" placeholder="Enter category" required>
                                    </div>

                                    <div class="form-group ">
                                        <label for="email"> Email</label>
                                        <input type="email" class="form-control" value="@if(old('email')) {{old('email')}} @else {{$client->email}} @endif" name="email" id="email" placeholder="Enter  email ">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">Phone Number</label>
                                        <input type="number" value=" {{$client->phone}} " class="form-control"   name="phone" id="phone" placeholder="Enter  number ">
                                    </div>

                                    <div class="form-group">
                                        <label for="name"> Client Address</label>
                                        <input type="text" class="form-control" value="@if(old('address')) {{old('address')}} @else {{$client->address}} @endif"  name="address" id="address" placeholder="Enter address" required>
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{route('client.index')}}" class="btn btn-danger">Back</a>

                                    </div>
                                </div>

                            </div>


                        </form>

                        @include('includes.form_error')
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

    <script>
        $(function () {
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('editor1')
            //bootstrap WYSIHTML5 - text editor
            $('.textarea').wysihtml5()
        })
    </script>


@endsection


@endsection