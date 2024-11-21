@extends('layouts.master')
@section('css')
    @section('title')
          {{trans('dashboard.media_center_department_annual_offers_section')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
          {{trans('dashboard.media_center_department_annual_offers_section')}}
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


                    <form method="post"  action="{{route('annual_offers.update',$annual_offer->id)}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6color: blue">  {{trans('dashboard.media_center_department_annual_offers_section')}}</h6><br>
                        <div class="row">

                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.media_center_department_title_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="title_{{$locale}}"  class="form-control" value="{{$annual_offer->translate($locale)->title}}">
                                    </div>

                                </div>
                            @endforeach




                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.media_center_department_published_date')}}  :</label>
                                    <input class="form-control" type="text"  id="datepicker-action" name="published_date" data-date-format="yyyy-mm-dd" value="{{$annual_offer->published_date}}">
                                </div>
                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('dashboard.media_center_department_image_url')}} : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="image_url">
                                </div>
                            </div>



                                <div class="col-md-12 mt-4 mb-3">
                                    <img style="width: 30%;border-radius: 4px" src="{{asset($annual_offer->image_url)}}">

                                </div>

                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label for="academic_year">{{trans('dashboard.media_center_department_pdf_url')}} : <span class="text-danger">*</span></label>
                                        <input type="file" accept=".pdf" name="pdf_url">
                                    </div>
                                </div>


                        </div>{{--end div row--}}


                        <button class="btn btn-dark btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.update_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

