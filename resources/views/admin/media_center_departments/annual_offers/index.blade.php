@extends('layouts.master')
@section('css')
    @section('title')
          {{trans('dashboard.media_center_department_annual_offers_section')}}

    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
              {{trans('dashboard.media_center_department_annual_offers_section')}}

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

                                <a href="{{route('annual_offers.create')}}" class="btn btn-dark btn-sm" role="button"
                                   aria-pressed="true">{{trans('dashboard.create_model')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('dashboard.media_center_department_title')}}</th>
                                            <th>{{trans('dashboard.media_center_department_image_url')}}</th>
                                            <th>{{trans('dashboard.media_center_department_pdf_url')}}</th>
                                            <th>{{trans('dashboard.media_center_department_published_date')}}</th>
                                            <th>{{trans('dashboard.operations')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($annual_offers as $annual_offer)
                                            <tr>
                                                <td>{{$annual_offer->id}}</td>
                                                <td>{{$annual_offer->translate(lang())->title}}</td>
                                                <td>
                                                    <img style="width: 40px;height: 40px;border-radius: 4px" src="{{asset($annual_offer->image_url)}}">
                                                </td>
                                                <td><a href="{{asset($annual_offer->pdf_url)}}">{{trans('dashboard.media_center_department_pdf_url')}}</a> </td>


                                                <td>{{$annual_offer->published_date}}</td>

                                                <td>
                                                    <div class="dropdown show">
                                                        <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            {{trans('dashboard.operations')}}
                                                        </a>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                            <a class="dropdown-item" href="{{route('annual_offers.edit',$annual_offer->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  {{trans('dashboard.update_model')}}</a>
                                                            <a class="dropdown-item"  href="{{route('annual_offers.delete',$annual_offer->id)}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('dashboard.delete_model')}}</a>

                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </table>

                                    {!! $annual_offers->links() !!}

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
