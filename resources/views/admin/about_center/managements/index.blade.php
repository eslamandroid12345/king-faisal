@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.Management')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.Management')}}
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

                                <a href="{{route('managements.create')}}" class="btn btn-dark btn-sm" role="button"
                                   aria-pressed="true">{{trans('dashboard.create_model')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
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
                                        @foreach($managements as $management)
                                            <tr>
                                                <td>{{$management->id}}</td>
                                                <td>{{$management->name}}</td>
                                                <td>{{$management->translate(lang())->role}}</td>

                                                <td>
                                                    <img style="width: 40px;height: 40px;border-radius: 4px" src="{{asset($management->background_image)}}">
                                                </td>


                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('dashboard.operations')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('managements.edit',$management->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  {{trans('dashboard.update_model')}}</a>
                                                            <a class="dropdown-item"  href="{{route('managements.delete',$management->id)}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('dashboard.delete_model')}}</a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>

                                    {!! $managements->links() !!}

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
