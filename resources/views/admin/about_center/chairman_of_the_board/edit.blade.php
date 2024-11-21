@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.ChairmanOfTheBoard')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.ChairmanOfTheBoard')}}
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


                    <form method="post"  action="{{route('chairman_of_the_boards.update',$chairman_of_the_board->id)}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6color: blue">{{trans('dashboard.ChairmanOfTheBoard')}}</h6><br>
                        <div class="row">

                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.title_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="title_{{$locale}}"  class="form-control" value="{{$chairman_of_the_board->translate($locale)->title}}">
                                    </div>

                                </div>
                            @endforeach

                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.description_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <textarea name="description_{{$locale}}"  class="form-control">{{$chairman_of_the_board->translate($locale)->description}}</textarea>
                                    </div>

                                </div>
                            @endforeach



                            <div class="col-md-4 mt-3">
                                <div class="form-group">
                                    <label for="background_image">{{trans('dashboard.background_image')}} : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="background_image">
                                </div>
                            </div>

                            <div class="col-md-12 mt-4 mb-3">
                                <img style="width: 30%;border-radius: 4px" src="{{asset($chairman_of_the_board->background_image)}}">

                            </div>


                        </div>


                        <button class="btn btn-dark btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.update_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

