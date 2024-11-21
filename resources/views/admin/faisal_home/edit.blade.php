@extends('layouts.master')
@section('style')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

@endsection
@section('css')
    @section('title')
        {{trans('dashboard.faisal')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.faisal')}}
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


                    <form method="post"  action="{{route('faisal_home.update',$faisal_home->id)}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6color: blue">{{trans('dashboard.faisal')}}</h6><br>
                        <div class="row">



                            @foreach (config('translatable.locales') as $locale)
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.content_'.$locale)}} : <span class="text-danger">*</span></label>

                                        <textarea name="content_{{$locale}}" rows="3" class="form-control" id="content_{{$locale}}">{{$faisal_home->translate($locale)->content}}</textarea>

                                    </div>

                                </div>

                            @endforeach


                        </div>{{--end div row--}}


                        <button class="btn btn-dark btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.update_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(function () {
            $('#content_ar').summernote();
            $('#content_en').summernote();
            $('#content_ch').summernote();
        });
    </script>
@endsection
