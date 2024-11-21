@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.research_paper_section')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.research_paper_section')}}
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


                    <form method="post"  action="{{route('research_papers.store')}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        <h6color: blue">{{trans('dashboard.research_paper_section')}}</h6><br>
                        <div class="row">

                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.research_paper_title_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="title_{{$locale}}"  class="form-control" value="{{old('title_'.$locale)}}">
                                    </div>

                                </div>
                            @endforeach

                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <label for="nal_id">{{trans('dashboard.research_paper_category')}} : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="research_department_id">
                                            <option selected disabled>{{trans('dashboard.research_paper_category')}}...</option>
                                            @foreach($research_paper_departments as $research_paper_department)
                                                <option  value="{{$research_paper_department->id}}">{{$research_paper_department->translate(lang())->title}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label for="nal_id">{{trans('dashboard.research_paper_show_home_page')}} : <span class="text-danger">*</span></label>
                                        <select class="custom-select mr-sm-2" name="show_home_page">
                                            <option selected disabled>{{trans('dashboard.research_paper_show_home_page')}}...</option>
                                            <option  value="0">No</option>
                                            <option  value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label for="academic_year">{{trans('dashboard.research_paper_background_image')}} : <span class="text-danger">*</span></label>
                                        <input type="file" accept="image/*" name="background_image">
                                    </div>
                                </div>


                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.research_paper_editor')}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="editor"  class="form-control" value="{{old('editor')}}">
                                    </div>

                                </div>




                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.research_paper_description_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <textarea name="description_{{$locale}}"  class="form-control">{{old('description_'.$locale)}}</textarea>
                                    </div>

                                </div>
                            @endforeach




                        </div>


                        <button class="btn btn-dark btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.create_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

