@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.members')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.members')}}
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
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50" style="text-align: center">
                                        <thead>
                                        <tr>

                                            <th>#</th>
                                            <th>{{trans('dashboard.member_name')}}</th>
                                            <th>{{trans('dashboard.member_email')}}</th>
                                            <th>{{trans('dashboard.phone')}}</th>
                                            <th>{{trans('dashboard.membership_status')}}</th>
                                            <th>{{trans('dashboard.membership_from_date')}}</th>
                                            <th>{{trans('dashboard.membership_to_date')}}</th>
                                            <th>{{trans('dashboard.membership_number')}}</th>
                                            <th>{{trans('dashboard.created_at')}}</th>
                                            <th>{{trans('dashboard.operations')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($members as $member)
                                            <tr>
                                                <td>{{$member->id}}</td>
                                                <td>{{$member->full_name}}</td>
                                                <td>{{$member->email}}</td>
                                                <td>{{$member->phone}}</td>
                                                <td>{{$member->membership_status}}</td>
                                                <td>{{$member->membership_from_date}}</td>
                                                <td>{{$member->membership_to_date}}</td>
                                                <td>{{$member->membership_number}}</td>
                                                <td>{{$member->created_at->diffForHumans()}}</td>

                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('dashboard.operations')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('membership_requests.details',$member->membership_number)}}"><i style="color:green" class="fas fa-money-bill-alt"></i>&nbsp;  {{trans('dashboard.membership_request_details')}}</a>

                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach

                                        </tbody>


                                    </table>

                                    {!! $members->links() !!}

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
