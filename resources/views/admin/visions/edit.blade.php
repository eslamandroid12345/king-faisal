@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.vision_title')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.vision_title')}}
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


                    <form method="post"  action="{{route('visions.update',$vision->id)}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6color: blue">{{trans('dashboard.vision_title')}}</h6><br>
                        <div class="row">

                            <input type="hidden" name="type">

                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.aspiration_title_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="title_{{$locale}}"  class="form-control" value="{{$vision->translate($locale)->title}}">
                                    </div>

                                </div>
                            @endforeach


                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.aspiration_description_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <textarea name="description_{{$locale}}"  class="form-control">{{$vision->translate($locale)->description}}</textarea>
                                    </div>

                                </div>
                            @endforeach


                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('dashboard.aspiration_icon')}} : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="icon">
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

