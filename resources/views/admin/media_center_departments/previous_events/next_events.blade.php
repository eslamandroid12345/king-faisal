@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.media_center_department_next_events_section')}}

    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.media_center_department_next_events_section')}}

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
                                            <th>{{trans('dashboard.media_center_department_title')}}</th>
                                            <th>{{trans('dashboard.media_center_department_image_url')}}</th>
                                            <th>{{trans('dashboard.media_center_department_published_date')}}</th>
                                            <th>{{trans('dashboard.operations')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($next_events as $next_event)
                                            <tr>
                                                <td>{{$next_event->id}}</td>
                                                <td>{{$next_event->translate(lang())->title}}</td>
                                                <td>
                                                    <img style="width: 40px;height: 40px;border-radius: 4px" src="{{asset($next_event->image_url)}}">
                                                </td>

                                                <td>{{$next_event->published_date}}</td>

                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('dashboard.operations')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('previous_events.edit',$next_event->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  {{trans('dashboard.update_model')}}</a>
                                                            <a class="dropdown-item"  href="{{route('previous_events.delete',$next_event->id)}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('dashboard.delete_model')}}</a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>

                                    {!! $next_events->links() !!}

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
