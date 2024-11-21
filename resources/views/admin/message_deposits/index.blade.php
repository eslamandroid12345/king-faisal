@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.message_deposit_title')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.message_deposit_title')}}
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
                                            <th>{{trans('dashboard.message_deposit_full_name')}}</th>
                                            <th>{{trans('dashboard.message_deposit_phone')}}</th>
                                            <th>{{trans('dashboard.message_deposit_email')}}</th>
                                            <th>{{trans('dashboard.message_deposit_attatchments')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($message_deposits as $message)
                                            <tr>
                                                <td>{{$message->id}}</td>
                                                <td>{{$message->full_name}}</td>
                                                <td>{{$message->phone}}</td>
                                                <td>{{$message->email}}</td>
                                                <td><a href="{{asset($message->attachments)}}">{{trans('dashboard.university_message_attatchments')}}</a></td>
                                            </tr>
                                        @endforeach


                                    </table>

                                    {!!   $message_deposits->links() !!}

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
