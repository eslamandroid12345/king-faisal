@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.point_of_sale_title')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.point_of_sale_title')}}
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

                                <a href="{{route('point_of_sales.create')}}" class="btn btn-dark btn-sm" role="button"
                                   aria-pressed="true">{{trans('dashboard.create_model')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('dashboard.point_of_sale_name')}}</th>
                                            <th>{{trans('dashboard.point_of_sale_description')}}</th>
                                            <th>{{trans('dashboard.point_of_sales_city_id')}}</th>
                                            <th>{{trans('dashboard.operations')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($point_of_sales as $point_of_sale)
                                        <tr>
                                            <td>{{$point_of_sale->id}}</td>
                                            <td>{{$point_of_sale->translate(lang())->name}}</td>
                                            <td>{{$point_of_sale->translate(lang())->description}}</td>
                                            <td>{{$point_of_sale->city->translate(lang())->name}}</td>
                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        {{trans('dashboard.operations')}}
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="{{route('point_of_sales.edit',$point_of_sale->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  {{trans('dashboard.update_model')}}</a>
                                                        <a class="dropdown-item"  href="{{route('point_of_sales.delete',$point_of_sale->id)}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('dashboard.delete_model')}}</a>
                                                        <a class="dropdown-item" href="{{route('point_of_sales_phones.getAllPhonesOfPointSale',$point_of_sale->id)}}"><i style="color: #ffc107" class="far fa-eye "></i>&nbsp;{{trans('dashboard.point_of_sale_phones')}}</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach



                                    </table>

                                    {!! $point_of_sales->links() !!}

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
