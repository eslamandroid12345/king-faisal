<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    @include('layouts.head')
    @yield('style')


    <style>

        .dataTables_length,.dataTables_filter{

            display: none;
        }
        .pagination {
            margin-top: 10px;
        }


        .radio-container {
            display: flex;
            flex-direction: column;
        }

        input[type="radio"] {
            display: none;
        }

        .radio-label {
            margin-bottom: 10px;
            cursor: pointer;
            position: relative;
            padding-left: 25px;
            font-size: 16px;
        }

        .radio-label:before {
            content: '';
            position: absolute;
            left: 0;
            top: 2px;
            width: 18px;
            height: 18px;
            border: 2px solid #2196F3;
            border-radius: 50%;
            background-color: #fff;
            transition: background-color 0.3s;
        }

        input[type="radio"]:checked + .radio-label:before {
            background-color: #2196F3;
            border: 2px solid #2196F3;
        }

        table.table-bordered.dataTable th, table.table-bordered.dataTable td {
            border-left-width: 0;
            padding: 10px;
        }

        .table-responsive{
            overflow-y: hidden;
        }
        .card{
            box-shadow: none;
        }

        .card-body {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }



    </style>
    @toastr_css

</head>

<body>

    <div class="wrapper"">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="{{ URL::asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
        </div>

        <!--=================================
 preloader -->

        @include('layouts.main-header')
        @include('layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">

          @yield('page-header')
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0" style="font-family: 'Noto Sans Arabic', sans-serif;">@yield('PageTitle')</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">@yield('PageText')</a></li>
                <li class="breadcrumb-item active">@yield('PageTitle')</li>
            </ol>
        </div>
    </div>

            @yield('content')

            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('layouts.footer-scripts')

    @toastr_js
    @toastr_render
    @yield('scripts')
</body>

</html>
