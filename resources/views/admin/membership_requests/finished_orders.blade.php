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
                                            <th>{{trans('dashboard.full_name_')}}</th>
                                            <th>{{trans('dashboard.email_')}}</th>
                                            <th>{{trans('dashboard.phone_')}}</th>
                                            <th>{{trans('dashboard.total_amount_')}}</th>
                                            <th>{{trans('dashboard.academic_organization')}}</th>
                                            <th>{{trans('dashboard.academic_degree')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($finished_orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->user->full_name}}</td>
                                                <td>{{$order->user->email}}</td>
                                                <td>{{$order->user->phone}}</td>
                                                <td>{{$order->total_amount . trans('dashboard.currency')}}</td>
                                                <td>{{$order->academic_organization}}</td>
                                                <td>{{$order->academic_degree}}</td>




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
