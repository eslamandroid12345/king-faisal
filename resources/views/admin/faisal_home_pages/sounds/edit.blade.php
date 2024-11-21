@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.faisal_home_page_sounds')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.faisal_home_page_sounds')}}
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


                    <form method="post"  action="{{route('sounds.update',$sound->id)}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6color: blue">{{trans('dashboard.faisal_home_page_sounds')}}</h6><br>
                        <div class="row">


                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('dashboard.background_image')}} : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="image">
                                </div>
                            </div>


                            <div class="col-md-12 mt-4 mb-3">
                                <img style="width: 30%;border-radius: 4px" src="{{asset($sound->image)}}">

                            </div>


                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('dashboard.video_url')}} : <span class="text-danger">*</span></label>
                                    <input type="text"  class="form-control" name="sound_url" value="{{$sound->sound_url}}">
                                </div>
                            </div>

                        @foreach (config('translatable.locales') as $locale)

                            <div class="col-md-4 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.title_'.$locale)}} : <span class="text-danger">*</span></label>
                                    <input  type="text" name="title_{{$locale}}"  class="form-control" value="{{$sound->translate($locale)->title}}">
                                </div>

                            </div>
                        @endforeach



                        </div>{{--end div row--}}


                        <button class="btn btn-dark btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.update_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

