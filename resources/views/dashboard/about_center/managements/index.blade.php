@extends('dashboard.core.app')
@section('title',trans('dashboard.Management'))
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>  {{trans('dashboard.Management')}}</h1>
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
                            <h3 class="card-title">    {{trans('dashboard.Management')}}</h3>
                            <div class="card-tools">
                                {{--start search model--}}
                                <a href="{{route('managements.create')}}"><button class="btn btn-dark waves-effect waves-light">{{trans('dashboard.create_model')}}</button></a>


                                {{--end search---}}
                            </div>
                        </div>


                        <div style="overflow-x: auto" class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{trans('dashboard.name')}}</th>
                                    <th>{{trans('dashboard.role')}}</th>
                                    <th>{{trans('dashboard.background_image')}}</th>
                                    <th>{{trans('dashboard.operations')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @forelse($managements as $management)
                                    <tr>
                                        <td>{{$management->id}}</td>
                                        <td>{{$management->name}}</td>
                                        <td>{!! $management->role !!}</td>

                                        <td>
                                            <img style="width: 100px;height: 80px;border-radius: 4px" src="{{asset($management->background_image)}}">
                                        </td>

                                        <td>
                                            <div class="operations-btns" style="">
                                                <a href="{{route('managements.edit',$management->id)}}"> <button class="btn btn-dark waves-effect waves-light">{{trans('dashboard.update_model')}}</button></a>
                                                <button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#delete-modal{{$management->id}}">{{trans('dashboard.delete_model')}}</button>
                                                <div id="delete-modal{{$management->id}}" class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                                    <div class="modal-dialog">
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
                                                                <form action="{{route('managements.destroy',$management->id)}}" method="POST">
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
                            <div>{{$managements->links()}}</div>
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
