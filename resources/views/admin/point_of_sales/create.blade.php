@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.point_of_sale_title')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.point_of_sale_title')}}
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

                    <form method="post"  action="{{route('point_of_sales.store')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <h6color: blue">{{trans('dashboard.point_of_sale_title')}}</h6><br>
                        <div class="row">

                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="nal_id">{{trans('dashboard.point_of_sales_city_id')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="city_id">
                                        <option selected disabled>{{trans('dashboard.point_of_sales_city_id')}}...</option>
                                        @foreach($cities as $city)
                                            <option  value="{{$city->id}}">{{$city->translate(lang())->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.point_of_sale_name_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="name_{{$locale}}"  class="form-control" value="{{old('name_'.$locale)}}">
                                    </div>

                                </div>
                            @endforeach


                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.point_of_sale_description_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <textarea name="description_{{$locale}}"  class="form-control">{{old('description_'.$locale)}}</textarea>
                                    </div>

                                </div>
                            @endforeach


                        </div>


                        <button class="btn btn-dark btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.create_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

