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


                    <form method="post"  action="{{route('coupons.update',$coupon->id)}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6color: blue">{{trans('dashboard.coupon_section')}}</h6><br>
                        <div class="row">

                            <input type="hidden" name="id" value="{{$coupon->id}}">

                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.coupon_code')}} : <span class="text-danger">*</span></label>
                                    <input  type="text" name="coupon_code"  class="form-control" value="{{$coupon->coupon_code}}">
                                </div>

                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="nal_id">{{trans('dashboard.discount_type')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="discount_type">
                                        <option selected disabled>{{trans('dashboard.discount_type')}}...</option>
                                        <option  value="per" {{$coupon->discount_type == 'per' ? 'selected' : ''}}>per</option>
                                        <option  value="val" {{$coupon->discount_type == 'val' ? 'selected' : ''}}>val</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.discount_value')}} : <span class="text-danger">*</span></label>
                                    <input  type="number" name="discount_value"  class="form-control" value="{{$coupon->discount_value}}">
                                </div>

                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.start_date')}}  :</label>
                                    <input class="form-control" type="text"  id="datepicker-action" name="start_date" data-date-format="yyyy-mm-dd" value="{{$coupon->start_date}}">
                                </div>
                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.end_date')}}  :</label>
                                    <input class="form-control" type="text"  id="datepicker-action-2" name="end_date" data-date-format="yyyy-mm-dd" value="{{$coupon->end_date}}">
                                </div>
                            </div>


                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.max_usage')}} : <span class="text-danger">*</span></label>
                                    <input  type="number" name="max_usage"  class="form-control"  value="{{$coupon->max_usage}}">
                                </div>

                            </div>


                        </div>{{--end div row--}}


                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.update_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

