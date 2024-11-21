@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.accept_orders')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.accept_orders')}}
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
                                            <th>{{trans('dashboard.phone__')}}</th>
                                            <th>{{trans('dashboard.email__')}}</th>
                                            <th>{{trans('dashboard.subject_title')}}</th>
                                            <th>{{trans('dashboard.subject_description')}}</th>
                                            <th>{{trans('dashboard.department')}}</th>
                                            <th>{{trans('dashboard.keywords')}}</th>
                                            <th>{{trans('dashboard.total_amount___')}}</th>
                                            <th>{{trans('dashboard.operations')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($accept_orders as $order)
                                            <tr>
                                                <td>{{$order->id}}</td>
                                                <td>{{$order->user->full_name}}</td>
                                                <td>{{$order->user->phone}}</td>
                                                <td>{{$order->user->email}}</td>
                                                <td>{{$order->subject_title}}</td>
                                                <td>{{$order->subject_description}}</td>
                                                <td>{{$order->department}}</td>
                                                <td>@foreach(json_decode($order->keywords,true) as $keyword) <span class="badge badge-primary">{{$keyword}}</span> @endforeach</td>
                                                <td>{{$order->total_amount . trans('dashboard.currency')}}</td>


                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('dashboard.operations')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('reference_users.index',$order->id)}}"><i style="color: #ffc107" class="fas fa-file-pdf-o"></i> &nbsp;{{trans('dashboard.all_references_chooses')}}&nbsp;</a>
                                                            <a class="dropdown-item" href="{{route('survey_requests.edit',$order->id)}}"><i style="color: #ffc107" class="fa fa-edit"></i>&nbsp;{{trans('dashboard.edit_order')}}&nbsp;</a>
                                                            <a class="dropdown-item" href="{{route('survey_requests.payment_ready',$order->id)}}"><i style="color: #ffc107" class="fa fa-money"></i>&nbsp;{{trans('dashboard.payment_ready')}}&nbsp;</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>

                                    {!! $accept_orders->links() !!}

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
