@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.coupon_section')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.coupon_section')}}
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


                    <form method="post"  action="{{route('coupons.store')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <h6color: blue">{{trans('dashboard.coupon_section')}}</h6><br>
                        <div class="row">



                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.coupon_code')}} : <span class="text-danger">*</span></label>
                                    <input  type="text" name="coupon_code"  class="form-control" value="{{old('coupon_code')}}">
                                </div>

                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="nal_id">{{trans('dashboard.discount_type')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="discount_type">
                                        <option selected disabled>{{trans('dashboard.discount_type')}}...</option>
                                            <option  value="per">per</option>
                                            <option  value="val">val</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.discount_value')}} : <span class="text-danger">*</span></label>
                                    <input  type="number" name="discount_value"  class="form-control" value="{{old('discount_value')}}">
                                </div>

                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.start_date')}}  :</label>
                                    <input class="form-control" type="text"  id="datepicker-action" name="start_date" data-date-format="yyyy-mm-dd">
                                </div>
                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.end_date')}}  :</label>
                                    <input class="form-control" type="text"  id="datepicker-action-2" name="end_date" data-date-format="yyyy-mm-dd">
                                </div>
                            </div>


                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.max_usage')}} : <span class="text-danger">*</span></label>
                                    <input  type="number" name="max_usage"  class="form-control" value="{{old('max_usage')}}">
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

