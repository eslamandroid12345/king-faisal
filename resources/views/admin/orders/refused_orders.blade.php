@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.refused_orders_section')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.refused_orders_section')}}
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
                                            <th>{{trans('dashboard.client_name')}}</th>
                                            <th>{{trans('dashboard.phone_num')}}</th>
                                            <th>{{trans('dashboard.user_mail')}}</th>
                                            <th>{{trans('dashboard.order_date')}}</th>
                                            <th>{{trans('dashboard.total_amount')}}</th>
                                            <th>{{trans('dashboard.operations')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($refused_orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->user->full_name}}</td>
                                                <td>{{$order->user->phone}}</td>
                                                <td>{{$order->user->email}}</td>
                                                <td>{{$order->order_date}}</td>
                                                <td>{{$order->total_amount . trans('dashboard.currency')}}</td>


                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('dashboard.operations')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('order_details',$order->id)}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;{{trans('dashboard.order_details')}}</a>
                                                            <a class="dropdown-item" href="{{route('payment_details',$order->id)}}"><i style="color: #9dc8e2" class="fas fa-money-bill-alt"></i>&nbsp; &nbsp;{{trans('dashboard.payment_details')}}</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>

                                    {!! $refused_orders->links() !!}

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
