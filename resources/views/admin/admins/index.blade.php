@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.admin_section')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.admin_section')}}
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

                                <a href="{{route('admin.create')}}" class="btn btn-dark btn-sm" role="button"
                                   aria-pressed="true">{{trans('dashboard.create_model')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('dashboard.admin_name')}}</th>
                                            <th>{{trans('dashboard.admin_email')}}</th>
                                            <th>{{trans('dashboard.admin_image')}}</th>
                                            <th>{{trans('dashboard.admin_status')}}</th>
                                            <th>{{trans('dashboard.operations')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($admins as $admin)
                                        <tr>
                                            <td>{{$admin->id}}</td>
                                            <td>{{$admin->name}}</td>
                                            <td>{{$admin->email}}</td>
                                            <td>
                                                <img style="width: 40px;height: 40px;border-radius: 4px" src="{{$admin->image == null ? asset('assets/default/images.jfif') :asset($admin->image)}}">
                                            </td>
                                            <td>{{$admin->getStatus()}}</td>

                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        {{trans('dashboard.operations')}}
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="{{route('admin.edit',$admin->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  {{trans('dashboard.update_model')}}</a>
                                                        @if(admin()->email == $admin->email)
                                                            <a class="dropdown-item" href="#"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;  {{trans('dashboard.not_delete_admin')}}</a>
                                                        @else
                                                            <a class="dropdown-item"  href="{{route('admin.delete',$admin->id)}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('dashboard.delete_model')}}</a>

                                                        @endif

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach



                                    </table>

                                    {!! $admins->links() !!}

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
