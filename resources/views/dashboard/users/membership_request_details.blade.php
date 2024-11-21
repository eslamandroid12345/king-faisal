@extends('dashboard.core.app')
@section('title', trans('dashboard.membership_request_details'))
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>   {{trans('dashboard.membership_request_details')}}</h1>
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
                            <h3 class="card-title">   {{trans('dashboard.membership_request_details')}}</h3>
                        </div>


                        <div style="overflow-x: auto" class="card-body">

                            <table class="table table-bordered">
                                <thead>
                                <tr>

                                    <th>#</th>
                                    <th>{{trans('dashboard.full_name_')}}</th>
                                    <th>{{trans('dashboard.email_')}}</th>
                                    <th>{{trans('dashboard.phone_')}}</th>
                                    <th>{{trans('dashboard.total_amount_')}}</th>
                                    <th>{{trans('dashboard.academic_organization')}}</th>
                                    <th>{{trans('dashboard.academic_degree')}}</th>
                                    <th>{{trans('dashboard.membership_request_from_date')}}</th>
                                    <th>{{trans('dashboard.membership_request_to_date')}}</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$membership_request->id}}</td>
                                        <td>{{$membership_request->user->full_name}}</td>
                                        <td>{{$membership_request->user->email}}</td>
                                        <td>{{$membership_request->user->phone}}</td>
                                        <td>{{$membership_request->total_amount . trans('dashboard.currency')}}</td>
                                        <td>{{$membership_request->academic_organization}}</td>
                                        <td>{{$membership_request->academic_degree}}</td>
                                        <td>{{$membership_request->user->membership_from_date}}</td>
                                        <td>{{$membership_request->user->membership_to_date}}</td>
                                    </tr>


                                </tbody>
                            </table>

                        </div>
                        <!-- /.card-body -->

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
