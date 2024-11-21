@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.Management')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.Management')}}
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


                    <form method="post"  action="{{route('managements.store')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <h6color: blue">{{trans('dashboard.Management')}}</h6><br>
                        <div class="row">



                        <div class="col-md-12 mt-3">
                            <div class="form-group">
                                <label>{{trans('dashboard.name')}} : <span class="text-danger">*</span></label>
                                <input  type="text" name="name"  class="form-control">
                            </div>

                        </div>

                        @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.role_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="role_{{$locale}}"  class="form-control" value="{{old('role_'.$locale)}}">
                                    </div>

                                </div>
                            @endforeach


                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.description_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <textarea name="description_{{$locale}}"  class="form-control">{{old('description_'.$locale)}}</textarea>
                                    </div>

                                </div>
                            @endforeach




                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('dashboard.background_image')}} : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="background_image">
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

