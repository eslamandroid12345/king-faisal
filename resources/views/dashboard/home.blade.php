@extends('dashboard.core.app')
@section('title',lang() == 'ar' ? $setting->website_name_ar : $setting->website_name_en)
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                        <h1>{{lang() == 'ar' ? $setting->website_name_ar : $setting->website_name_en}}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">


                    <div class=" col-4">
                        <div class="small-box bg-dark text-center">
                            <div class="inner p-3">
                                <h2 class="mb-3">{{trans('dashboard.users_all')}}</h2>
                                <h3>{{$users}}</h3>

                            </div>
                            <a href="{{route('users.index')}}" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                <div class=" col-4">
                    <div class="small-box bg-dark text-center">
                        <div class="inner p-3">
                            <h2 class="mb-3">{{trans('dashboard.members_all')}}</h2>
                            <h3>{{$members}}</h3>

                        </div>
                        <a href="{{route('members')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <div class=" col-4">
                    <div class="small-box bg-dark text-center">
                        <div class="inner p-3">
                            <h2 class="mb-3">{{trans('dashboard.book_store')}}</h2>
                            <h3>{{$book_stores}}</h3>

                        </div>
                        <a href="{{route('books.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <div class=" col-4">
                    <div class="small-box bg-dark text-center">
                        <div class="inner p-3">
                            <h2 class="mb-3">{{trans('dashboard.archaeological_antiquities')}}</h2>
                            <h3>{{ $antiques}}</h3>

                        </div>
                        <a href="{{route('antiques.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <div class=" col-4">
                    <div class="small-box bg-dark text-center">
                        <div class="inner p-3">
                            <h2 class="mb-3">{{trans('dashboard.contact_us')}}</h2>
                            <h3>{{ $contacts}}</h3>

                        </div>
                        <a href="{{route('contacts.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <div class=" col-4">
                    <div class="small-box bg-dark text-center">
                        <div class="inner p-3">
                            <h2 class="mb-3">{{trans('dashboard.visit_requests')}}</h2>
                            <h3>{{ $entityVisitors}}</h3>

                        </div>
                        <a href="{{route('visitors.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>



                <div class=" col-4">
                    <div class="small-box bg-dark text-center">
                        <div class="inner p-3">
                            <h2 class="mb-3">{{trans('dashboard.point_of_sale')}}</h2>
                            <h3>{{ $pointOfSales}}</h3>

                        </div>
                        <a href="{{route('point_of_sales.index')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


                <div class=" col-4">
                    <div class="small-box bg-dark text-center">
                        <div class="inner p-3">
                            <h2 class="mb-3">{{trans('dashboard.cart')}}</h2>
                            <h3>{{$orders}}</h3>

                        </div>
                        <a href="{{route('new_orders')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>



                <div class=" col-4">
                    <div class="small-box bg-dark text-center">
                        <div class="inner p-3">
                            <h2 class="mb-3">{{trans('dashboard.membership_services')}}</h2>
                            <h3>{{$memberShipRequests}}</h3>

                        </div>
                        <a href="{{route('membership_requests.new')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>



                <div class=" col-4">
                    <div class="small-box bg-dark text-center">
                        <div class="inner p-3">
                            <h2 class="mb-3">{{trans('dashboard.servy_request')}}</h2>
                            <h3>{{$surveyRequests}}</h3>

                        </div>
                        <a href="{{route('survey_requests.new')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>



                <div class=" col-4">
                    <div class="small-box bg-dark text-center">
                        <div class="inner p-3">
                            <h2 class="mb-3">{{trans('dashboard.information_request')}}</h2>
                            <h3>{{  $informationRequests}}</h3>

                        </div>
                        <a href="{{route('information_requests.new')}}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>


            </div>
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@section('js_addons')

@endsection
