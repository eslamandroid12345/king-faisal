
@extends('dashboard.core.app')
@section('title',trans('dashboard.media_center_department_previous_events_section'))

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
                    <h1>   {{trans('dashboard.media_center_department_previous_events_section')}} </h1>
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

                        <form  action="{{route('events.update',$previous_event->id)}}" method="post" autocomplete="off" enctype="multipart/form-data">
                            <div class="card-header">
                                <h3 class="card-title">  {{trans('dashboard.media_center_department_previous_events_section')}}</h3>
                            </div>
                            <div class="card-body">
                                @csrf
                                @method('PUT')

                                <div class="row">

                                    <input type="hidden" value="new" name="type">

                                    @foreach (config('translatable.locales') as $locale)

                                        <div class="form-group col-md-12 col-12">
                                            <label for="exampleInputName1">{{trans('dashboard.aspiration_title_'.$locale)}}</label>
                                            <input  type="text" name="title_{{$locale}}"  class="form-control" id="exampleInputName1" value="{{$previous_event->translate($locale)->title}}">

                                        </div>
                                    @endforeach


                                    @php
                                        $i = 1;
                                    @endphp

                                    @foreach (config('translatable.locales') as $locale)

                                        <div class="form-group col-md-12 col-12">
                                            <div class="form-group">
                                                <label for="exampleInputName1">{{trans('dashboard.aspiration_description_'.$locale)}}</label>
                                                <textarea id="summernote{{$i++}}" name="description_{{$locale}}"  class="form-control" >{{$previous_event->translate($locale)->description}}</textarea>
                                            </div>

                                        </div>
                                    @endforeach


                                    <div class="form-group col-md-6 col-12">
                                        <label for="type">{{trans('dashboard.event_type')}}</label>
                                        <select id="type" name="type" class="form-control">
                                            <option selected disabled>{{trans('dashboard.event_type')}}</option>
                                            <option  value="next_events" {{$previous_event->type == 'next_events' ? 'selected' : ''}}>{{trans('dashboard.next_event')}}</option>
                                            <option  value="previous_events" {{$previous_event->type == 'previous_events' ? 'selected' : ''}}>{{trans('dashboard.previous_event')}}</option>
                                        </select>
                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">@lang('dashboard.speakers')</label>
                                        <input  type="text" name="speakers"  class="form-control" id="exampleInputName1" value="{{$previous_event->speakers}}">

                                    </div>

                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">@lang('dashboard.event_location')</label>
                                        <input  type="text" name="location"  class="form-control" id="exampleInputName1" value="{{$previous_event->location}}">

                                    </div>


                                    <div class="form-group col-md-6 col-12">
                                        <label for="exampleInputName1">@lang('dashboard.from_time')</label>
                                        <input  type="time" name="from_time"  class="form-control" id="exampleInputName1" value="{{$previous_event->from_time}}">

                                    </div>


                                    <div class="form-group col-md-12 col-12">
                                        <label for="exampleInputName1">@lang('dashboard.to_time')</label>
                                        <input  type="time" name="to_time"  class="form-control" id="exampleInputName1" value="{{$previous_event->to_time}}">

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
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function () {
            $('#summernote1').summernote();
            $('#summernote2').summernote();
            $('#summernote3').summernote();

            bsCustomFileInput.init();
            $('.select2').select2({
                language: {
                    searching: function() {}
                },
            });
        });
    </script>


@endsection
