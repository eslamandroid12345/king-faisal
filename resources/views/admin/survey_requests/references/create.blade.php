@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.references_department')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.references_department')}}
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


                    <form method="post"  action="{{route('references.store')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <h6color: blue">{{trans('dashboard.references_department')}}</h6><br>
                        <div class="row">

                            <input type="hidden" name="survey_request_id" value="{{$id}}">

                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.reference_name')}} : <span class="text-danger">*</span></label>
                                    <input  type="text" name="reference_name"  class="form-control" value="{{old('reference_name')}}">
                                </div>

                            </div>

                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.reference_type')}} : <span class="text-danger">*</span></label>
                                    <input  type="text" name="reference_type"  class="form-control" value="{{old('reference_type')}}">
                                </div>

                            </div>



                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.page_number')}} : <span class="text-danger">*</span></label>
                                    <input  type="number" name="pages_number" min="1" class="form-control" value="{{old('page_number')}}">
                                </div>

                            </div>


                        </div>{{--end div row--}}


                        <button class="btn btn-dark btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.create_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

