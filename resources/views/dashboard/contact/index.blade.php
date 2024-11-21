@extends('dashboard.core.app')
@section('title',trans('dashboard.contact_title'))
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>     {{trans('dashboard.contact_title')}}</h1>
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
                            <h3 class="card-title">    {{trans('dashboard.contact_title')}}</h3>
                            <div class="card-tools">
                                {{--start search model--}}
                                <a href="{{route('contacts.index')}}" style="color: #fff" class="btn btn-dark waves-effect waves-light"><i class="fa fa-spinner"></i> </a>
                                <button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#delete-modal-0">{{__('dashboard.search')}}</button>

                                <div id="delete-modal-0" class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                                    <div class="modal-dialog">
                                        <div class="modal-content float-left">
                                            <div class="modal-header">
                                                <h5 class="modal-title">{{__('dashboard.search_data')}}</h5>
                                            </div>


                                            <form action="#" method="GET">
                                                <div class="modal-body">
                                                    <div class="form-group col-md-12 col-12">
                                                        <label for="exampleInputName1">{{trans('dashboard.date')}}</label>
                                                        <input name="created_at" type="date" class="form-control" id="exampleInputName1">
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
                                    <th>{{trans('dashboard.contact_full_name')}}</th>
                                    <th>{{trans('dashboard.contact_email')}}</th>
                                    <th>{{trans('dashboard.contact_subject')}}</th>
                                    <th>{{trans('dashboard.contact_message')}}</th>
                                    <th>{{trans('dashboard.date_register')}}</th>
                                    <th>{{trans('dashboard.operations')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                @forelse($contacts as $contact)
                                    <tr>
                                        <td>{{$contact->id}}</td>
                                        <td>{{$contact->full_name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->subject}}</td>
                                        <td>{{$contact->message}}</td>
                                        <td>{{$contact->created_at->diffForHumans()}}</td>

                                        <td>
                                            <div class="operations-btns" style="">

                                            <button class="btn btn-dark waves-effect waves-light" data-toggle="modal" data-target="#delete-modal{{$contact->id}}">{{trans('dashboard.delete_model')}}</button>
                                                <div id="delete-modal{{$contact->id}}" class="modal fade modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">                                                    <div class="modal-dialog">
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
                                                                <form action="{{route('contacts.destroy',$contact->id)}}" method="POST">
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
                            <div>{{$contacts->links()}}</div>
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
