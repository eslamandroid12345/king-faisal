
@extends('dashboard.core.app')
@section('title',trans('dashboard.media_center_department_annual_offers_section'))

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
                    <h1>   {{trans('dashboard.media_center_department_annual_offers_section')}} </h1>
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

                        <form  action="{{route('annual_offers.update',$annual_offer->id)}}" method="post" autocomplete="off" enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">{{trans('dashboard.media_center_department_annual_offers_section')}}</h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                @method('PUT')

                                <div class="row">

                                    <input type="hidden" value="annual_offer" name="type">

                                    @foreach (config('translatable.locales') as $locale)

                                        <div class="form-group col-md-6 col-12">
                                            <label for="exampleInputName1">{{trans('dashboard.aspiration_title_'.$locale)}}</label>
                                            <input  type="text" name="title_{{$locale}}"  class="form-control" id="exampleInputName1" value="{{$annual_offer->translate($locale)->title}}">

                                        </div>
                                    @endforeach



                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.media_center_department_published_date')}}</label>
                                        <input  type="number" name="published_year" class="form-control" id="exampleInputName1"  value="{{$annual_offer->published_year}}">
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputFile">{{trans('dashboard.media_center_department_image_url')}}</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="image_url" type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputFile">{{trans('dashboard.media_center_department_pdf_url')}}</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="pdf_url" type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
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
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>



@endsection
