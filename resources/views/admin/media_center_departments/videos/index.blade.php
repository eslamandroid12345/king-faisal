@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.media_center_department_videos_section')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.media_center_department_videos_section')}}
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

                                <a href="{{route('media_center_videos.create')}}" class="btn btn-dark btn-sm" role="button"
                                   aria-pressed="true">{{trans('dashboard.create_model')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('dashboard.media_center_department_title')}}</th>
                                            <th>{{trans('dashboard.media_center_department_image_url')}}</th>
                                            <th>{{trans('dashboard.media_center_department_video_url')}}</th>
                                            <th>{{trans('dashboard.media_center_department_published_date')}}</th>
                                            <th>{{trans('dashboard.operations')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($videos as $video)
                                            <tr>
                                                <td>{{$video->id}}</td>
                                                <td>{{$video->translate(lang())->title}}</td>
                                                <td>
                                                    <img style="width: 40px;height: 40px;border-radius: 4px" src="{{asset($video->image_url)}}">
                                                </td>
                                                <td><a href="{{asset($video->video_url)}}">{{trans('dashboard.media_center_department_video_url')}}</a> </td>

                                                <td>{{$video->published_date}}</td>

                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('dashboard.operations')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('videos.edit',$video->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  {{trans('dashboard.update_model')}}</a>
                                                            <a class="dropdown-item"  href="{{route('videos.delete',$video->id)}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('dashboard.delete_model')}}</a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>

                                    {!! $videos->links() !!}

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
