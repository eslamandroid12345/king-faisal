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
                    <div class="col-xl-12 mb-30">
                        <div class="card card-statistics h-100">
                            <div class="card-body">

                                <a href="{{route('research_papers.create')}}" class="btn btn-dark btn-sm" role="button"
                                   aria-pressed="true">{{trans('dashboard.create_model')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('dashboard.research_paper_department_title')}}</th>
                                            <th>{{trans('dashboard.research_paper_category')}}</th>
                                            <th>{{trans('dashboard.research_paper_editor')}}</th>
                                            <th>{{trans('dashboard.research_paper_background_image')}}</th>
                                            <th>   {{trans('dashboard.operations')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($research_papers as  $research_paper)
                                            <tr>
                                                <td>{{$research_paper->id}}</td>
                                                <td>{{$research_paper->translate(lang())->title}}</td>
                                                <td>{{$research_paper->research_paper_department->translate(lang())->title}}</td>
                                                <td>{{$research_paper->editor}}</td>

                                                <td>
                                                    <img style="width: 60px;height: 60px;border-radius: 4px" src="{{asset($research_paper->background_image)}}">
                                                </td>
                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('dashboard.operations')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('research_papers.edit',$research_paper->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  {{trans('dashboard.update_model')}}</a>
                                                            <a class="dropdown-item"  href="{{route('research_papers.delete',$research_paper->id)}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('dashboard.delete_model')}}</a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach



                                    </table>

                                    {!!  $research_papers->links() !!}

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
