@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.university_message_title')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.university_message_title')}}
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
                                            <th>{{trans('dashboard.university_message_full_name')}}</th>
                                            <th>{{trans('dashboard.university_message_phone')}}</th>
                                            <th>{{trans('dashboard.university_message_email')}}</th>
                                            <th>{{trans('dashboard.university_message_university')}}</th>
                                            <th>{{trans('dashboard.university_message_college')}}</th>
                                            <th>{{trans('dashboard.university_message_department')}}</th>
                                            <th>{{trans('dashboard.university_message_subject')}}</th>
                                            <th>{{trans('dashboard.university_message_level')}}</th>
                                            <th>{{trans('dashboard.university_message_attatchments')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($university_messages as $message)
                                            <tr>
                                                <td>{{$message->id}}</td>
                                                <td>{{$message->full_name}}</td>
                                                <td>{{$message->phone}}</td>
                                                <td>{{$message->email}}</td>
                                                <td>{{$message->university}}</td>
                                                <td>{{$message->college}}</td>
                                                <td>{{$message->department}}</td>
                                                <td>{{$message->subject}}</td>
                                                <td>{{$message->level}}</td>
                                                <td><a href="{{asset($message->attachments)}}">{{trans('dashboard.university_message_attatchments')}}</a></td>
                                                <td>{{$message->created_at->diffForHumans()}}</td>

                                            </tr>
                                        @endforeach


                                    </table>

                                    {!!   $university_messages->links() !!}

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
