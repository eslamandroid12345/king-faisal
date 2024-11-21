@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.slider_title')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.slider_title')}}
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

                    <form method="post"  action="{{route('sliders.update',$slider->id)}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6color: blue">{{trans('dashboard.slider_title')}}</h6><br>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{trans('dashboard.slider_url')}} : <span class="text-danger">*</span></label>
                                    <input  type="text" name="url"  class="form-control" value="{{$slider->url}}">
                                </div>

                            </div>


                        </div>

                        <div class="row">


                            <div class="col-md-12 mt-4">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('dashboard.slider_background_image')}} : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="background_image">
                                </div>
                            </div>

                            <div class="col-md-12 mt-4 mb-3">
                                <img style="width: 30%;border-radius: 4px" src="{{asset($slider->background_image)}}">

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

