@extends('dashboard.core.app')
@section('title',trans('dashboard.coupon_section'))

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
                    <h1>   {{trans('dashboard.coupon_section')}}</h1>
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

                        <form  action="{{route('coupons.update',$coupon->id)}}" method="post" autocomplete="off" enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">  {{trans('dashboard.coupon_section')}}</h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                @method('PUT')


                                <div class="row">
                                    <input type="hidden" name="id" value="{{$coupon->id}}">
                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.coupon_code')}}</label>
                                        <input  type="text" name="coupon_code" class="form-control" id="exampleInputName1" value="{{$coupon->coupon_code}}">
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="discount_type">{{trans('dashboard.discount_type')}}</label>
                                        <select id="discount_type" name="discount_type" class="form-control">
                                            <option  value="per" {{$coupon->discount_type == 'per' ? 'selected' :'' }}>per</option>
                                            <option  value="val" {{$coupon->discount_type == 'val' ? 'selected' :'' }}>val</option>
                                        </select>
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.discount_value')}}</label>
                                        <input  type="number" min="1" name="discount_value" class="form-control" id="exampleInputName1"  value="{{$coupon->discount_value}}">
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.start_date')}}</label>
                                        <input  type="date" name="start_date" class="form-control" id="exampleInputName1"  value="{{$coupon->start_date}}">
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.end_date')}}</label>
                                        <input  type="date" name="end_date" class="form-control" id="exampleInputName1" value="{{$coupon->end_date}}">
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.max_usage')}}</label>
                                        <input  type="number" min="1" name="max_usage"  class="form-control" id="exampleInputName1" value="{{$coupon->max_usage}}">
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
