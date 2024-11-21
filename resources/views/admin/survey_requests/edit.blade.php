@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.total_amount___')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.total_amount___')}}
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


                    <form method="post"  action="{{route('survey_requests.update',$survey_request->id)}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6color: blue">{{trans('dashboard.total_amount___')}}</h6><br>
                        <div class="row">

                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.total_amount___')}} : <span class="text-danger">*</span></label>
                                    <input  type="number" min="1" name="total_amount"  class="form-control"  value="{{$survey_request->total_amount}}">
                                </div>

                            </div>


                        </div>{{--end div row--}}


                        <button class="btn btn-dark btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.update_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

