@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.order_details')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.order_details')}}
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

                                <br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>

                                            <th>#</th>
                                            <th>{{trans('dashboard.product_name')}}</th>
                                            <th>{{trans('dashboard.product_type')}}</th>
                                            <th>{{trans('dashboard.product_image')}}</th>
                                            <th>{{trans('dashboard.product_price')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($order_details as $order_detail)
                                            <tr>
                                                <td>{{$order_detail->id}}</td>
                                                <td>{{$order_detail->book_store_id != null ? $order_detail->book_store->translate(lang())->title :  $order_detail->antique->translate(lang())->name}}</td>
                                                <td>{{$order_detail->book_store_id != null ? trans('dashboard.book_type') : trans('dashboard.antique_type')}}</td>
                                                <td>
                                                    <img style="width: 40px;height: 40px;border-radius: 4px" src="{{asset($order_detail->book_store_id != null ? $order_detail->book_store->background_image : $order_detail->antique->background_image[0])}}">
                                                </td>
                                                <td>{{$order_detail->unit_price . trans('dashboard.currency')}}</td>

                                            </tr>
                                        @endforeach


                                    </table>

                                    {!! $order_details->links() !!}

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
