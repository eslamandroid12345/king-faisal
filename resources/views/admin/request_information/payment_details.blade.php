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
                                            <th>@lang('dashboard.information_request_payment_type')</th>
                                            <th>@lang('dashboard.information_request_receipt')</th>
                                            <th>@lang('dashboard.information_request_receipt_show')</th>
                                            <th>@lang('dashboard.information_request_total')</th>
                                            <th>@lang('dashboard.information_request_account_name')</th>
                                            <th>@lang('dashboard.information_request_account_number')</th>
                                            <th>@lang('dashboard.information_request_from_bank')</th>
                                            <th>@lang('dashboard.information_request_to_bank')</th>
                                            <th>@lang('dashboard.information_request_payment_date')</th>
                                            <th>@lang('dashboard.information_request_payment_time')</th>
                                            <th>@lang('dashboard.information_request_payment_status')</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{$payment->id}}</td>
                                            <td>{{$payment->payment_type_check}}</td>
                                            <td>
                                                <img style="width: 40px;height: 40px;border-radius: 4px" src="{{asset($payment->receipt_image)}}">
                                            </td>
                                            <td><a href="{{asset($payment->receipt_image)}}">{{trans('dashboard.receipt_image_show')}}</a> </td>
                                            <td>{{$payment->total_amount . trans('dashboard.currency')}}</td>
                                            <td>{{$payment->bank_account_name}}</td>
                                            <td>{{$payment->bank_account_number}}</td>
                                            <td>{{$payment->from_bank}}</td>
                                            <td>{{$payment->to_bank}}</td>
                                            <td>{{$payment->transfer_date}}</td>
                                            <td>{{$payment->transfer_time}}</td>
                                            <td>{{$payment->payment_status}}</td>

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
