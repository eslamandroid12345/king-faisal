@extends('dashboard.core.app')
@section('title',trans('dashboard.media_center_department_videos_section'))
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>@lang('dashboard.media_center_department_videos_section')</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"> @lang('dashboard.media_center_department_videos_section')</h3>
                            <div class="card-tools">
                                {{--start search model--}}
                                <a href="{{route('media_center_videos.create')}}"><button class="btn btn-dark waves-effect waves-light">{{trans('dashboard.create_model')}}</button></a>


                                {{--end search---}}
                            </div>
                        </div>


                        <div style="overflow-x: auto" class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>@lang('dashboard.media_center_department_title')</th>
                                    <th>@lang('dashboard.media_center_department_image_url')</th>
                                    <th>@lang('dashboard.media_center_department_video_url')</th>
                                    <th>@lang('dashboard.media_center_department_published_date')</th>
                                    <th>@lang('dashboard.operations')</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($videos as $video)
                                    <tr>
                                        <td>{{$video->id}}</td>
                                        <td>{{$video->title}}</td>
                                        <td>
                                            <img style="width: 200px;height: 80px;border-radius: 4px" src="{{asset($video->image_url)}}">
                                        </td>
                                        <td><a href="{{asset($video->video_url)}}">{{trans('dashboard.media_center_department_video_url')}}</a> </td>
                                        <td>{{$video->published_date}}</td>

                                        <td>
                                            <div class="operations-btns" style="">
                                                <a href="{{route('media_center_videos.edit', $video->id)}}"> <button class="btn btn-dark waves-effect waves-light">{{trans('dashboard.update_model')}}</button></a>
                                                <button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#delete-modal{{ $video->id}}">{{trans('dashboard.delete_model')}}</button>
                                                <div id="delete-modal{{ $video->id}}" class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                                    <div class="modal-dialog">
                                                        <div class="modal-content float-left">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">{{__('dashboard.delete_ok')}}</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>{{__('dashboard.Do you want to real delete')}}</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" data-dismiss="modal" class="btn btn-dark waves-effect waves-light m-l-5 mr-1 ml-1">
                                                                    {{__('dashboard.close')}}
                                                                </button>
                                                                <form action="{{route('media_center_videos.destroy',$video->id)}}" method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">{{trans('dashboard.delete_model')}}</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                @empty
                                    {{__('dashboard.not_data')}}
                                @endforelse
                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div>{{ $videos->links()}}</div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
