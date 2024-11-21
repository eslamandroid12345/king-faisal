@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.point_of_sale_phone_title')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.point_of_sale_phone_title')}}
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

                    <form method="post"  action="{{route('point_of_sales_phones.update',$point_of_sale_phone->id)}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6color: blue">{{trans('dashboard.point_of_sale_phone_title')}}</h6><br>
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>{{trans('dashboard.point_of_sale_phone')}} : <span class="text-danger">*</span></label>
                                    <input  type="text" name="phone"  class="form-control" value="{{$point_of_sale_phone->phone}}">
                                </div>

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

