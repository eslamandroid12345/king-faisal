@extends('dashboard.core.app')
@section('title',trans('dashboard.update_admin'))

@section('css_addons')
    <link rel="stylesheet" href="{{ asset('V2/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('V2/plugins/select2/css/select2.min.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('V2/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('V2/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">
    <style>
        .optional{
            opacity: .5;
            font-size: 13px;
        }
    </style>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>    {{trans('dashboard.update_admin')}}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <form  action="{{route('admin.update',$admin->id)}}" method="post" autocomplete="off" enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">   {{trans('dashboard.update_admin')}}</h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                @method('PUT')

                                <div class="row">

                                    <div class="form-group col-md-12 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.admin_name')}} </label>
                                        <input  type="text" name="name" class="form-control" id="exampleInputName1" value="{{$admin->name}}">
                                    </div>


                                    <div class="form-group col-md-12 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.admin_email')}} </label>
                                        <input  type="email" name="email" class="form-control" id="exampleInputName1" value="{{$admin->email}}">
                                    </div>


                                    <div class="form-group col-md-12 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.admin_password')}} </label>
                                        <input  type="text" name="password" class="form-control" id="exampleInputName1" >
                                    </div>




                                    <div class="form-group col-md-12 col-12">
                                        <label for="exampleInputFile">{{trans('dashboard.admin_image')}}</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3 mb-3">
                                        <img src="{{$admin->image}}" style="width: 80px;height: 80px" />
                                    </div>



                                    <div class="form-group clearfix col-12">
                                        <div class="icheck-wetasphalt d-inline">
                                            <input name="is_active" type="checkbox" value="1" id="checkboxPrimary3" {{$admin->is_active == 1 ? 'checked' : ''}}>
                                            <label for="checkboxPrimary3"> {{__('dashboard.active_account')}} </label>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-dark waves-effect waves-light">{{trans('dashboard.update_model')}}</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->

                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection


@section('js_addons')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ asset('V2/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('V2/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>

    </script>



    <script src="{{ asset('V2/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('V2/plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function () {
            bsCustomFileInput.init();
            $('.select2').select2({
                language: {
                    searching: function() {}
                },
            });
        });
    </script>


@endsection
