@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.coupon_section')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.coupon_section')}}
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


                    <form method="post"  action="{{route('contents.store')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <h6color: blue">{{trans('dashboard.ckeditor')}}</h6><br>
                        <div class="row">



                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.coupon_ckeditor')}} : <span class="text-danger">*</span></label>
                                    <textarea  name="content"  class="form-control"></textarea>
                                </div>

                            </div>


                        </div>{{--end div row--}}


                        <button class="btn btn-success btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.create_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

