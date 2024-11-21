@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.media_center_department_previous_events_section')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.media_center_department_previous_events_section')}}
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form method="post"  action="{{route('previous_events.store')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <h6color: blue">  {{trans('dashboard.media_center_department_previous_events_section')}}</h6><br>
                        <div class="row">

                            <input type="hidden" value="previous_events" name="type">


                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.media_center_department_title_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="title_{{$locale}}"  class="form-control" value="{{old('title_'.$locale)}}">
                                    </div>

                                </div>
                            @endforeach


                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.media_center_department_description_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <textarea name="description_{{$locale}}"  class="form-control">{{old('description_'.$locale)}}</textarea>
                                    </div>

                                </div>
                            @endforeach


                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="nal_id">{{trans('dashboard.event_type')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="book_type">
                                        <option selected disabled>{{trans('dashboard.event_type')}}...</option>
                                        <option  value="next_events">{{trans('dashboard.next_event')}}</option>
                                        <option  value="previous_events" selected>{{trans('dashboard.previous_event')}}</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.media_center_department_published_date')}}  :</label>
                                    <input class="form-control" type="text"  id="datepicker-action" name="published_date" data-date-format="yyyy-mm-dd">
                                </div>
                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('dashboard.media_center_department_image_url')}} : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="image_url">
                                </div>
                            </div>



                        </div>{{--end div row--}}


                        <button class="btn btn-dark btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.create_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

