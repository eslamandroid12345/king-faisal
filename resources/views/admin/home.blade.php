<!DOCTYPE html>
<html lang="en">
@section('title')
    {{trans('dashboard.login_success')}}
@stop
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    @include('layouts.head')
    @toastr_css



</head>

<body style="font-family: 'Noto Sans Arabic', sans-serif;">

<div class="wrapper" style="font-family: 'Noto Sans Arabic', sans-serif;">

    <!--=================================
preloader -->

    <div id="pre-loader">
        <img src="{{URL::asset('assets/images/pre-loader/loader-01.svg')}}" alt="">
    </div>

    <!--=================================
preloader -->

    @include('layouts.main-header')

    @include('layouts.main-sidebar')

    <!--=================================
 Main content -->
    <!-- main-content -->
    <div class="content-wrapper">
        <div class="page-title" >
            <div class="row">
                <div class="col-sm-6 mb-5">
                    <h4 class="mb-0">{{lang() == 'ar' ? $setting->website_name_ar : $setting->website_name_en}}</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right">
                    </ol>
                </div>
            </div>
        </div>
        <!-- widgets -->
        <div class="row" >

            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-info">
                                        <i class="fas fa-users highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">{{trans('dashboard.users_all')}}</p>
                                <h4>{{$users}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-link mr-1" aria-hidden="true"></i><a href="{{route('users.index')}}" target="_blank"><span class="text-info">{{trans('dashboard.users_all')}}  </span></a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-info">
                                        <i class="fas fa-user-circle highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">{{trans('dashboard.members_all')}}</p>
                                <h4>{{$members}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-link mr-1" aria-hidden="true"></i><a href="{{route('members')}}" target="_blank"><span class="text-info">{{trans('dashboard.members_all')}}   </span></a>
                        </p>
                    </div>
                </div>
            </div>



            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-info">
                                        <i class="fas fa-book highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">{{trans('dashboard.book_store')}}</p>
                                <h4>{{$book_stores}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-link mr-1" aria-hidden="true"></i><a href="{{route('books.index')}}" target="_blank"><span class="text-info">{{trans('dashboard.book_store')}}</span></a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-info">
                                        <i class="fas fa-hourglass-start highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">{{trans('dashboard.archaeological_antiquities')}}</p>
                                <h4>{{ $antiques}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-link mr-1" aria-hidden="true"></i><a href="{{route('antiques.index')}}" target="_blank"><span class="text-info">{{trans('dashboard.archaeological_antiquities')}} </span></a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-info">
                                        <i class="fas fa-inbox highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">{{trans('dashboard.contact_us')}}</p>
                                <h4>{{ $contacts}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-link mr-1" aria-hidden="true"></i><a href="{{route('contacts.index')}}" target="_blank"><span class="text-info">{{trans('dashboard.contact_us')}} </span></a>
                        </p>
                    </div>
                </div>
            </div>





            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-info">
                                        <i class="fas fa-universal-access highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">{{trans('dashboard.visit_requests')}}</p>
                                <h4>{{ $entityVisitors}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-link mr-1" aria-hidden="true"></i><a href="{{route('visitors.index')}}" target="_blank"><span class="text-info">{{trans('dashboard.visit_requests')}}  </span></a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-info">
                                        <i class="fas fa-map highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">{{trans('dashboard.point_of_sale')}}</p>
                                <h4>{{ $pointOfSales}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-link mr-1" aria-hidden="true"></i><a href="{{route('point_of_sales.index')}}" target="_blank"><span class="text-info">{{trans('dashboard.point_of_sale')}}  </span></a>
                        </p>
                    </div>
                </div>
            </div>




            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-info">
                                        <i class="fas fa-shopping-cart highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">{{trans('dashboard.orders_all')}}</p>
                                <h4>{{$orders}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-link mr-1" aria-hidden="true"></i><a href="{{route('new_orders')}}" target="_blank"><span class="text-info">{{trans('dashboard.orders_all')}} </span></a>
                        </p>
                    </div>
                </div>
            </div>



            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-info">
                                        <i class="fas fa-credit-card highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">{{trans('dashboard.membership_services')}}</p>
                                <h4>{{$memberShipRequests}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-link mr-1" aria-hidden="true"></i><a href="{{route('membership_requests.new')}}" target="_blank"><span class="text-info">{{trans('dashboard.membership_services')}} </span></a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-info">
                                        <i class="fas fa-file-pdf-o highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">{{trans('dashboard.servy_request')}}</p>
                                <h4>{{$surveyRequests}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-link mr-1" aria-hidden="true"></i><a href="{{route('survey_requests.new')}}" target="_blank"><span class="text-info">{{trans('dashboard.servy_request')}}  </span></a>
                        </p>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
                <div class="card card-statistics h-100">
                    <div class="card-body">
                        <div class="clearfix">
                            <div class="float-left">
                                    <span class="text-info">
                                        <i class="fas fa-search-plus highlight-icon" aria-hidden="true"></i>
                                    </span>
                            </div>
                            <div class="float-right text-right">
                                <p class="card-text text-dark">{{trans('dashboard.information_request')}}</p>
                                <h4>{{  $informationRequests}}</h4>
                            </div>
                        </div>
                        <p class="text-muted pt-3 mb-0 mt-2 border-top">
                            <i class="fas fa-link mr-1" aria-hidden="true"></i><a href="{{route('information_requests.new')}}" target="_blank"><span class="text-info">{{trans('dashboard.information_request')}} </span></a>
                        </p>
                    </div>
                </div>
            </div>





        </div>
        <!-- Orders Status widgets-->




        @include('layouts.footer')
    </div><!-- main content wrapper end-->
</div>
</div>
</div>

<!--=================================
footer -->

@include('layouts.footer-scripts')
@yield('scripts')
@toastr_js
@toastr_render
</body>

</html>
