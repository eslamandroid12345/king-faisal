@extends('dashboard.core.app')
@section('title',   trans('dashboard.members'))
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>  {{trans('dashboard.members')}}</h1>
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
                            <h3 class="card-title">  {{trans('dashboard.members')}}</h3>
                            <div class="card-tools">
                                {{--start search model--}}
                                <a href="{{route('members')}}" style="color: #fff" class="btn btn-dark waves-effect waves-light"><i class="fa fa-spinner"></i> </a>
                                <button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#delete-modal-0">{{__('dashboard.search')}}</button>
                                <div id="delete-modal-0" class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                                    <div class="modal-dialog">
                                        <div class="modal-content float-left">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{__('dashboard.search_data')}}</h5>
                                            </div>

                                            <form action="{{route('members')}}" method="GET">
                                                <div class="modal-body">
                                                    <div class="form-group col-md-12 col-12">
                                                        <label for="exampleInputName1">{{trans('dashboard.phone_')}}</label>
                                                        <input name="phone" type="text" class="form-control" id="exampleInputName1">
                                                    </div>

                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" data-dismiss="modal" class="btn btn-dark waves-effect waves-light m-l-5 mr-1 ml-1">
                                                        {{__('dashboard.search_close')}}
                                                    </button>
                                                    <button type="submit" class="btn btn-danger">{{__('dashboard.search')}}</button>

                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                {{--end search---}}
                            </div>
                        </div>


                        <div style="overflow-x: auto" class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                <tr>

                                    <th>#</th>
                                    <th>{{trans('dashboard.member_name')}}</th>
                                    <th>{{trans('dashboard.member_email')}}</th>
                                    <th>{{trans('dashboard.phone')}}</th>
                                    <th>{{trans('dashboard.membership_status')}}</th>
                                    <th>{{trans('dashboard.membership_from_date')}}</th>
                                    <th>{{trans('dashboard.membership_to_date')}}</th>
                                    <th>{{trans('dashboard.created_at')}}</th>
                                    <th>{{trans('dashboard.operations')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @forelse($members as $member)
                                    <tr>
                                        <td>{{$member->id}}</td>
                                        <td>{{$member->full_name}}</td>
                                        <td>{{$member->email}}</td>
                                        <td>{{$member->phone}}</td>
                                        <td>{{$member->check_membership_status}}</td>
                                        <td>{{$member->membership_from_date}}</td>
                                        <td>{{$member->membership_to_date}}</td>
                                        <td>{{$member->created_at->diffForHumans()}}</td>


                                        <td>
                                            <div class="operations-btns" style="">
                                                <a href="{{$member->membership_number != null ? route('membership_requests.details',$member->membership_number) : '#'}}"> <button class="btn btn-dark waves-effect waves-light" {{$member->membership_number == null ? 'disabled' : ''}}>{{trans('dashboard.membership_request_details')}}</button></a>
                                                <button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#delete-modal{{$member->id}}">{{trans('dashboard.delete_model')}}</button>
                                                <div id="delete-modal{{$member->id}}" class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                                    <div class="modal-dialog">
                                                        <div class="modal-content float-left">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">{{__('dashboard.delete_ok')}}</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>{{__('dashboard.Do you want to real delete')}}</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" data-dismiss="modal" class="btn btn-dark waves-effect waves-light m-l-5 mr-1 ml-1">
                                                                    غلق
                                                                </button>
                                                                <form action="{{route('users.destroy',$member->id)}}" method="post">
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
                            <div>{{$members->links()}}</div>
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
