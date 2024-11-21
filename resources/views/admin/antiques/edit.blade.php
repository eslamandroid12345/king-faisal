@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.antique_title')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.antique_title')}}
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


                    <form method="post"  action="{{route('antiques.update',$antique->id)}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6color: blue">{{trans('dashboard.antique_title')}}</h6><br>
                        <div class="row">

                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.antique_name_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="name_{{$locale}}"  class="form-control" value="{{$antique->translate($locale)->name}}">
                                    </div>

                                </div>
                            @endforeach

                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.category_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="category_{{$locale}}"  class="form-control" value="{{$antique->translate($locale)->category}}">
                                    </div>

                                </div>
                            @endforeach



                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.antique_period_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="period_{{$locale}}"  class="form-control" value="{{$antique->translate($locale)->period}}">
                                    </div>

                                </div>
                            @endforeach




                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.antique_material_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="material_{{$locale}}"  class="form-control" value="{{$antique->translate($locale)->material}}">
                                    </div>

                                </div>
                            @endforeach



                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.antique_origin_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="origin_{{$locale}}"  class="form-control" value="{{$antique->translate($locale)->origin}}">
                                    </div>

                                </div>
                            @endforeach


                            <div class="col-md-4 mt-3">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('dashboard.antique_images')}} : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="images[]" multiple>
                                </div>
                            </div>

                                <div class="col-md-12 mt-3">

                                @foreach($antique->antique_images as $image)

                                    <img style="width: 100px;height: 100px;border-radius: 4px" src="{{asset($image)}}">

                                @endforeach
                                </div>



                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.antique_price')}} : <span class="text-danger">*</span></label>
                                        <input  type="number" name="price"  class="form-control" min="1" value="{{$antique->price}}">
                                    </div>

                                </div>


                                @foreach (config('translatable.locales') as $locale)

                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <label>{{trans('dashboard.description_'.$locale)}} : <span class="text-danger">*</span></label>
                                            <textarea style="height: 300px" name="description_{{$locale}}"  class="form-control">{{$antique->translate($locale)->description}}</textarea>
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

