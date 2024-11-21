@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.new_admin')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.new_admin')}}
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form method="post"  action="{{route('admin.store')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <h6color: blue">{{trans('dashboard.new_admin')}}</h6><br>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.admin_name')}} : <span class="text-danger">*</span></label>
                                    <input  type="text" name="name"  class="form-control">
                                </div>

                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.admin_email')}} : </label>
                                    <input type="email"  name="email" class="form-control" >
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>{{trans('dashboard.admin_password')}} :</label>
                                    <input  type="password" name="password" class="form-control" >
                                </div>
                            </div>


                            <div class="col-md-6 mt-4">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('dashboard.admin_image')}} : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="image">
                                </div>
                            </div>

                        </div>

                        <button class="btn btn-dark btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.create_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

