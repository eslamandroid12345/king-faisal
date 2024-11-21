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

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <form method="post"  action="{{route('books.update',$book_store->id)}}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <h6color: blue">{{trans('dashboard.book_store_title')}}</h6><br>
                        <div class="row">

                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.book_title_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="title_{{$locale}}"  class="form-control" value="{{$book_store->translate($locale)->title}}">
                                    </div>

                                </div>
                            @endforeach


                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.book_description_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <textarea name="description_{{$locale}}"  class="form-control">{{$book_store->translate($locale)->description}}</textarea>
                                    </div>

                                </div>
                            @endforeach


                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.book_series_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="series_{{$locale}}"  class="form-control" value="{{$book_store->translate($locale)->series}}">
                                    </div>

                                </div>
                            @endforeach


                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-4 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.book_cover_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <input  type="text" name="cover_{{$locale}}"  class="form-control" value="{{$book_store->translate($locale)->cover}}">
                                    </div>

                                </div>
                            @endforeach



                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.book_additional_information_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <textarea name="additional_information_{{$locale}}"  class="form-control">{{$book_store->translate($locale)->additional_information}}</textarea>
                                    </div>

                                </div>
                            @endforeach

                            {{--فهرس الكتاب--}}
                            @foreach (config('translatable.locales') as $locale)

                                <div class="col-md-12 mt-3">
                                    <div class="form-group">
                                        <label>{{trans('dashboard.book_contents_'.$locale)}} : <span class="text-danger">*</span></label>
                                        <textarea name="contents_{{$locale}}"  class="form-control">{{$book_store->translate($locale)->contents}}</textarea>
                                    </div>

                                </div>
                            @endforeach

                            <div class="col-md-4 mt-3">
                                <div class="form-group">
                                    <label for="nal_id">{{trans('dashboard.book_book_type')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="book_type">
                                        <option selected disabled>{{trans('dashboard.book_book_type')}}...</option>
                                        <option  value="soft_copy"  {{$book_store->book_type == 'soft_copy' ? 'selected' : ''}}>Soft Copy</option>
                                        <option  value="hard_copy"  {{$book_store->book_type == 'hard_copy' ? 'selected' : ''}}>Hard Copy</option>
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-4 mt-3">
                                <div class="form-group">
                                    <label for="nal_id">{{trans('dashboard.book_published_year')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="published_year">
                                        <option selected disabled>{{trans('dashboard.book_published_year')}}...</option>
                                        @for($year = 1800 ; $year <= now()->format('Y');$year++)
                                            <option  value="{{$year}}" {{$book_store->published_year == $year ? 'selected' : ''}}>{{$year}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-4 mt-3">
                                <div class="form-group">
                                    <label for="academic_year">{{trans('dashboard.book_background_image')}} : <span class="text-danger">*</span></label>
                                    <input type="file" accept="image/*" name="background_image">
                                </div>
                            </div>


                            <div class="col-md-4 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.book_price')}} : <span class="text-danger">*</span></label>
                                    <input  type="number" name="price"  class="form-control" value="{{$book_store->price}}">
                                </div>

                            </div>

                            <div class="col-md-4 mt-3">
                                <div class="form-group">
                                    <label>{{trans('dashboard.book_printing_number')}} : <span class="text-danger">*</span></label>
                                    <input  type="number" name="printing_number"  class="form-control" value="{{$book_store->printing_number}}" min="1">
                                </div>

                            </div>


                            <div class="col-md-4 mt-3">
                                <div class="form-group">
                                    <label for="nal_id">{{trans('dashboard.book_show_home_page')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="show_home_page">
                                        <option selected disabled>{{trans('dashboard.book_show_home_page')}}...</option>
                                        <option  value="0" {{$book_store->show_home_page == 0 ? 'selected' : ''}}>No</option>
                                        <option  value="1" {{$book_store->show_home_page == 1 ? 'selected' : ''}}>Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="nal_id">{{trans('dashboard.book_book_category_id')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="book_category_id">
                                        <option selected disabled>{{trans('dashboard.book_book_category_id')}}...</option>
                                        @foreach($book_categories as $book_category)
                                            <option  value="{{$book_category->id}}" {{$book_store->book_category_id == $book_category->id ? 'selected' : ''}}>{{$book_category->translate(lang())->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div class="col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="nal_id">{{trans('dashboard.book_book_author_id')}} : <span class="text-danger">*</span></label>
                                    <select class="custom-select mr-sm-2" name="author_id">
                                        <option selected disabled>{{trans('dashboard.book_book_author_id')}}...</option>
                                        @foreach($authors as $author)
                                            <option  value="{{$author->id}}" {{$book_store->author_id == $author->id ? 'selected' : ''}}>{{$author->full_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                        </div>{{--end div row--}}


                        <button class="btn btn-dark btn-sm nextBtn btn-lg pull-right" type="submit">{{trans('dashboard.update_model')}}</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- row closed -->
@endsection

