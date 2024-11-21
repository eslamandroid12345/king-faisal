@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.all_references_chooses')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.all_references_chooses')}}
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
                                            <th>{{trans('dashboard.reference_name')}}</th>
                                            <th>{{trans('dashboard.from_page')}}</th>
                                            <th>{{trans('dashboard.to_page')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($reference_user_chooses as $reference_user_choose)
                                            <tr>
                                                <td>{{$reference_user_choose->id}}</td>
                                                <td>{{$reference_user_choose->reference->reference_name}}</td>
                                                <td>{{$reference_user_choose->from_page}}</td>
                                                <td>{{$reference_user_choose->to_page}}</td>


                                            </tr>
                                        @endforeach


                                    </table>

                                    {!! $reference_user_chooses->links() !!}

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
