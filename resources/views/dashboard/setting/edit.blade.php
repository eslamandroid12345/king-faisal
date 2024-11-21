@extends('dashboard.core.app')
@section('title',trans('dashboard.setting_website'))

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
                    <h1>{{trans('dashboard.setting_website')}}</h1>
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

                        <form  action="{{route('setting.update')}}" method="post" autocomplete="off" enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">{{trans('dashboard.setting_website')}}</h3>
                            </div>
                            <div class="card-body">
                                @csrf

{{--                                <div class="mt-3 mb-3">--}}
{{--                                    <img src="{{$company->logo}}" style="width: 80px;height: 80px" />--}}
{{--                                </div>--}}

                                <div class="row">

                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.website_name_ar')}} </label>
                                        <input  type="text" name="website_name_ar" class="form-control" id="exampleInputName1"  value="{{$setting->website_name_ar}}">
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.website_name_en')}} </label>
                                        <input  type="text" name="website_name_en" class="form-control" id="exampleInputName1"  value="{{$setting->website_name_en}}">
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.website_name_ch')}} </label>
                                        <input  type="text" name="website_name_ch" class="form-control" id="exampleInputName1"  value="{{$setting->website_name_ch}}">
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.email')}} </label>
                                        <input  type="email" name="email" class="form-control" id="exampleInputName1"  value="{{$setting->email}}">
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.location')}} </label>
                                        <input  type="text" name="location" class="form-control" id="exampleInputName1"   value="{{$setting->location}}">
                                    </div>

                                    {{-- strat social--}}



                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.facebook_url')}} </label>
                                        <input  type="text" name="facebook_url" class="form-control" id="exampleInputName1" value="{{$setting->facebook_url}}">
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.youtube_url')}}</label>
                                        <input  type="text" name="youtube_url" class="form-control" id="exampleInputName1"  value="{{$setting->youtube_url}}">
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.linkedin_url')}}</label>
                                        <input  type="text" name="linkedin_url" class="form-control" id="exampleInputName1"   value="{{$setting->linkedin_url}}">
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.twitter_url')}}</label>
                                        <input  type="text" name="twitter_url" class="form-control" id="exampleInputName1"   value="{{$setting->twitter_url}}">
                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.instagram_url')}}</label>
                                        <input  type="text" name="instagram_url" class="form-control" id="exampleInputName1"   value="{{$setting->instagram_url}}">
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.setting_membership_request')}}</label>
                                        <input  type="number" min="1" name="membership_request" class="form-control" id="exampleInputName1"  value="{{$setting->membership_request}}">
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.setting_information_request')}}</label>
                                        <input  type="number" min="1"  name="information_request" class="form-control" id="exampleInputName1"  value="{{$setting->information_request}}">
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">{{trans('dashboard.setting_survey_request')}}</label>
                                        <input  type="number" min="1"  id="exampleInputName1" name="survey_request" class="form-control" value="{{$setting->survey_request}}">
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputFile">{{trans('dashboard.setting_logo')}}</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="logo" type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group col-md-12 col-12">
                                        <label for="exampleInputFile">{{trans('dashboard.king_faisal_and_family')}}</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input name="king_faisal_and_family_image" type="file" class="custom-file-input" id="exampleInputFile">
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
