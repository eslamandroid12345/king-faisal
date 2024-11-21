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
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">

                                <a href="{{route('coupons.create')}}" class="btn btn-dark btn-sm" role="button"
                                   aria-pressed="true">{{trans('dashboard.create_model')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>

                                            <th>#</th>
                                            <th>{{trans('dashboard.coupon_code')}}</th>
                                            <th>{{trans('dashboard.discount_type')}}</th>
                                            <th>{{trans('dashboard.discount_value')}}</th>
                                            <th>{{trans('dashboard.start_date')}}</th>
                                            <th>{{trans('dashboard.end_date')}}</th>
                                            <th>{{trans('dashboard.max_usage')}}</th>
                                            <th>{{trans('dashboard.operations')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($coupons as $coupon)
                                            <tr>
                                                <td>{{$coupon->id}}</td>
                                                <td>{{$coupon->coupon_code}}</td>
                                                <td>{{$coupon->discount_type}}</td>
                                                <td>{{$coupon->discount_type == 'per' ? $coupon->discount_value .' %' : $coupon->discount_value . trans('dashboard.currency')}}</td>
                                                <td>{{$coupon->start_date}}</td>
                                                <td>{{$coupon->end_date}}</td>
                                                <td>{{$coupon->max_usage}}</td>

                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('dashboard.operations')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('coupons.edit',$coupon->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  {{trans('dashboard.update_model')}}</a>
                                                            <a class="dropdown-item"  href="{{route('coupons.delete',$coupon->id)}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('dashboard.delete_model')}}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>

                                    {!! $coupons->links() !!}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection
@section('js')

@endsection
