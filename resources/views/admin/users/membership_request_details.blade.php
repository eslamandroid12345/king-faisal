@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.membership_request_details')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.membership_request_details')}}
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

                                            <th>{{trans('dashboard.membership_request_number')}}</th>
                                            <th>{{trans('dashboard.full_name_')}}</th>
                                            <th>{{trans('dashboard.email_')}}</th>
                                            <th>{{trans('dashboard.phone_')}}</th>
                                            <th>{{trans('dashboard.total_amount_')}}</th>
                                            <th>{{trans('dashboard.academic_organization')}}</th>
                                            <th>{{trans('dashboard.academic_degree')}}</th>
                                            <th>{{trans('dashboard.membership_request_from_date')}}</th>
                                            <th>{{trans('dashboard.membership_request_to_date')}}</th>
                                        </tr>

                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td>{{$membership_request->id}}</td>
                                                <td>{{$membership_request->user->full_name}}</td>
                                                <td>{{$membership_request->user->email}}</td>
                                                <td>{{$membership_request->user->phone}}</td>
                                                <td>{{$membership_request->total_amount . trans('dashboard.currency')}}</td>
                                                <td>{{$membership_request->academic_organization}}</td>
                                                <td>{{$membership_request->academic_degree}}</td>
                                                <td>{{$membership_request->user->membership_from_date}}</td>
                                                <td>{{$membership_request->user->membership_to_date}}</td>

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
