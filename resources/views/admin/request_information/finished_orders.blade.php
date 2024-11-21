@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.finished_orders_section')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.finished_orders_section')}}
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
                                            <th>{{trans('dashboard.full_name__')}}</th>
                                            <th>{{trans('dashboard.request_information_full_name')}}</th>
                                            <th>{{trans('dashboard.university__')}}</th>
                                            <th>{{trans('dashboard.phone__')}}</th>
                                            <th>{{trans('dashboard.email__')}}</th>
                                            <th>{{trans('dashboard.subject__')}}</th>
                                            <th>{{trans('dashboard.attachments__')}}</th>
                                            <th>{{trans('dashboard.total__')}}</th>
                                            <th>{{trans('dashboard.operations')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($finished_orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->user->full_name}}</td>
                                                <td>{{$order->request_information_full_name}}</td>
                                                <td>{{$order->university}}</td>
                                                <td>{{$order->user->phone}}</td>
                                                <td>{{$order->user->email}}</td>
                                                <td>{{$order->request_information_subject}}</td>
                                                <td><a href="{{asset($order->request_information_attachments)}}">{{trans('dashboard.attachments__')}}</a> </td>
                                                <td>{{$order->total_amount . trans('dashboard.currency')}}</td>



                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('dashboard.operations')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('information_requests.payment_details',$order->id)}}"><i style="color: #9dc8e2" class="fas fa-money-bill-alt"></i>&nbsp; &nbsp;{{trans('dashboard.payment_details')}}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>

                                    {!! $finished_orders->links() !!}

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
