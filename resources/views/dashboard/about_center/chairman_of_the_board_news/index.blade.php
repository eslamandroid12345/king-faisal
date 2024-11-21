@extends('dashboard.core.app')
@section('title', trans('dashboard.chairman_of_the_board_of_directors_news'))
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>     {{trans('dashboard.chairman_of_the_board_of_directors_news')}}</h1>
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
                            <h3 class="card-title">        {{trans('dashboard.chairman_of_the_board_of_directors_news')}}</h3>
                            <div class="card-tools">
                                {{--start search model--}}
                                <a href="{{route('chairman_of_the_board_news.create')}}"><button class="btn btn-dark waves-effect waves-light">{{trans('dashboard.create_model')}}</button></a>


                                {{--end search---}}
                            </div>
                        </div>


                        <div style="overflow-x: auto" class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{trans('dashboard.title')}}</th>
                                    <th>{{trans('dashboard.description')}}</th>
                                    <th>{{trans('dashboard.background_image')}}</th>
                                    <th>{{trans('dashboard.published_date')}}</th>
                                    <th>{{trans('dashboard.operations')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @forelse($chairman_of_the_board_news as $chairman_of_the_board_new)
                                    <tr>
                                        <td>{{$chairman_of_the_board_new->id}}</td>
                                        <td>{!! $chairman_of_the_board_new->title !!}</td>
                                        <td>{!! $chairman_of_the_board_new->description !!}</td>

                                        <td>
                                            <img style="width: 200px;height: 100px;border-radius: 4px" src="{{asset($chairman_of_the_board_new->background_image)}}">
                                        </td>
                                        <td>{{$chairman_of_the_board_new->published_date}}</td>
                                        <td>
                                            <div class="operations-btns" style="">
                                                <a href="{{route('chairman_of_the_board_news.edit',$chairman_of_the_board_new->id)}}"> <button class="btn btn-dark waves-effect waves-light">{{trans('dashboard.update_model')}}</button></a>
                                                <button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#delete-modal{{$chairman_of_the_board_new->id}}">{{trans('dashboard.delete_model')}}</button>
                                                <div id="delete-modal{{$chairman_of_the_board_new->id}}" class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                                    <div class="modal-dialog">
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
                                                                <form action="{{route('chairman_of_the_board_news.destroy',$chairman_of_the_board_new->id)}}" method="POST">
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
                            <div>{{$chairman_of_the_board_news->links()}}</div>
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
