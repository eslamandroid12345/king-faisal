@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.setting_website')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.setting_website')}}
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

                    <form method="post"  action="{{route('setting.update')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <h6color: blue">{{trans('dashboard.setting_website')}}</h6><br>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.website_name_ar')}} : <span class="text-danger">*</span></label>
                                    <input  type="text" name="website_name_ar"  class="form-control" value="{{$setting->website_name_ar}}">
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.website_name_en')}} : <span class="text-danger">*</span></label>
                                    <input  type="text" name="website_name_en"  class="form-control" value="{{$setting->website_name_en}}">
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.website_name_ch')}}  : <span class="text-danger">*</span></label>
                                    <input  type="text" name="website_name_ch"  class="form-control" value="{{$setting->website_name_ch}}">
                                </div>

                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.email')}} : </label>
                                    <input type="email"  name="email" class="form-control" value="{{$setting->email}}">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.location')}} : </label>
                                    <input type="text"  name="location" class="form-control" value="{{$setting->location}}">
                                </div>
                            </div>



                            {{-- Start Social Media-------------------------------}}
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.facebook_url')}} : </label>
                                    <input type="text"  name="facebook_url" class="form-control" value="{{$setting->facebook_url}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.youtube_url')}} : </label>
                                    <input type="text"  name="youtube_url" class="form-control" value="{{$setting->youtube_url}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.linkedin_url')}} : </label>
                                    <input type="text"  name="linkedin_url" class="form-control" value="{{$setting->linkedin_url}}">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.twitter_url')}} : </label>
                                    <input type="text"  name="twitter_url" class="form-control" value="{{$setting->twitter_url}}">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.instagram_url')}} : </label>
                                    <input type="text"  name="instagram_url" class="form-control" value="{{$setting->instagram_url}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.setting_membership_request')}} : </label>
                                    <input type="number" min="1"  name="membership_request" class="form-control" value="{{$setting->membership_request}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.setting_information_request')}} : </label>
                                    <input type="number" min="1"  name="information_request" class="form-control" value="{{$setting->information_request}}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.setting_survey_request')}} : </label>
                                    <input type="number" min="1"  name="survey_request" class="form-control" value="{{$setting->survey_request}}">
                                </div>
                            </div>

                        </div>

                        <div class="row">



                            <div class="col-md-6 mt-4">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('dashboard.setting_logo')}} : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="logo">
                                </div>
                            </div>

                            <div class="col-md-12 mt-4 mb-3">
                                <img style="width: 30%;border-radius: 4px" src="{{asset($setting->logo)}}">

                            </div>

                            <div class="col-md-6 mt-4">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('dashboard.king_faisal_and_family')}} : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="king_faisal_and_family_image">
                                </div>
                            </div>


                            <div class="col-md-12 mt-4 mb-3">
                                <img style="width: 30%;border-radius: 4px" src="{{asset($setting->king_faisal_and_family_image)}}">

                            </div>


                        </div>

                        <button class="btn btn-dark btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.update_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

