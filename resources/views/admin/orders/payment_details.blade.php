@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.payment_details')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.payment_details')}}
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

                                <br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>


                                            <th>#</th>
                                            <th>{{trans('dashboard.transaction_id')}}</th>
                                            <th>{{trans('dashboard.transaction_status')}}</th>
                                            <th>{{trans('dashboard.payment_type')}}</th>
                                            <th>{{trans('dashboard.total')}}</th>
                                            <th>{{trans('dashboard.receipt_image')}}</th>
                                            <th>{{trans('dashboard.receipt_image_show')}}</th>
                                            <th>{{trans('dashboard.payment_date')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{$payment->id}}</td>
                                                <td>{{$payment->transaction_id ?? trans('dashboard.transaction_id_status')}}</td>
                                                <td>{{$payment->checkPaymentStatus()}}</td>
                                                <td>{{$payment->checkPaymentType()}}</td>
                                                <td>{{$payment->total_amount . trans('dashboard.currency')}}</td>
                                                <td>
                                                    <img style="width: 40px;height: 40px;border-radius: 4px" src="{{asset($payment->receipt_image)}}">
                                                </td>
                                                <td><a href="{{asset($payment->receipt_image)}}">{{trans('dashboard.receipt_image_show')}}</a> </td>
                                                <td>{{$payment->payment_date}}</td>

                                            </tr>

                                    </table>


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
