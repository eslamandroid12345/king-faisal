@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.entity_visitor_title')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.entity_visitor_title')}}
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
                                            <th>{{trans('dashboard.entity_visitor_full_name')}}</th>
                                            <th>{{trans('dashboard.entity_visitor_email')}}</th>
                                            <th>{{trans('dashboard.entity_visitor_visit_date')}}</th>
                                            <th>{{trans('dashboard.entity_visitor_entity_id')}}</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($entity_visitors as $entity_visitor)
                                            <tr>
                                                <td>{{$entity_visitor->id}}</td>
                                                <td>{{$entity_visitor->full_name}}</td>
                                                <td>{{$entity_visitor->email}}</td>
                                                <td>{{$entity_visitor->visit_date}}</td>
                                                <td>{{$entity_visitor->entity->translate(lang())->name}}</td>

                                            </tr>
                                        @endforeach



                                    </table>

                                    {!!  $entity_visitors->links() !!}

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
