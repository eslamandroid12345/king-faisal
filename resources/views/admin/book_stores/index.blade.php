@extends('layouts.master')
@section('css')
    @section('title')
        {{trans('dashboard.book_store_title')}}
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        {{trans('dashboard.book_store_title')}}
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

                                <a href="{{route('books.create')}}" class="btn btn-dark btn-sm" role="button"
                                   aria-pressed="true">{{trans('dashboard.create_model')}}</a><br><br>
                                <div class="table-responsive">
                                    <table id="datatable" class="table  table-hover table-sm table-bordered p-0"
                                           data-page-length="50"
                                           style="text-align: center">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>{{trans('dashboard.book_title')}}</th>
                                            <th>{{trans('dashboard.book_background_image')}}</th>
                                            <th>{{trans('dashboard.book_series')}}</th>
                                            <th>{{trans('dashboard.book_cover')}}</th>
                                            <th>{{trans('dashboard.book_book_type')}}</th>
                                            <th>{{trans('dashboard.book_published_year')}}</th>
                                            <th>{{trans('dashboard.book_price')}}</th>
                                            <th>{{trans('dashboard.book_printing_number')}}</th>
                                            <th>{{trans('dashboard.book_book_category_id')}}</th>
                                            <th>{{trans('dashboard.book_book_author_id')}}</th>
                                            <th>{{trans('dashboard.operations')}}</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($book_stores as $book_store)
                                        <tr>
                                            <td>{{$book_store->id}}</td>
                                            <td>{{$book_store->translate(lang())->title}}</td>
                                            <td>
                                                <img style="width: 40px;height: 40px;border-radius: 4px" src="{{$book_store->background_image}}">
                                            </td>
                                            <td>{{$book_store->series}}</td>
                                            <td>{{$book_store->cover}}</td>
                                            <td>{{$book_store->book_type}}</td>
                                            <td>{{$book_store->published_year}}</td>
                                            <td>{{$book_store->price}}</td>
                                            <td>{{$book_store->printing_number}}</td>
                                            <td>{{$book_store->bookCategory->translate(lang())->name}}</td>
                                            <td>{{$book_store->author->full_name}}</td>

                                            <td>
                                                <div class="dropdown show">
                                                    <a class="btn btn-info btn-sm dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        {{trans('dashboard.operations')}}
                                                    </a>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                        <a class="dropdown-item" href="{{route('books.edit',$book_store->id)}}"><i style="color:green" class="fa fa-edit"></i>&nbsp;  {{trans('dashboard.update_model')}}</a>
                                                        <a class="dropdown-item"  href="{{route('books.delete',$book_store->id)}}"><i style="color: red" class="fa fa-trash"></i>&nbsp;  {{trans('dashboard.delete_model')}}</a>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach


                                    </table>

                                {!! $book_stores->links() !!}

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
