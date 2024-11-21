<!--=================================
header start-->
<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <!-- logo -->
    <div class="text-left navbar-brand-wrapper">

{{--        <a class="navbar-brand brand-logo" href="{{ route('admin.home') }}"><img src="{{ URL::asset('assets/images/Logo.png') }}" alt=""></a>--}}
{{--        <a class="navbar-brand brand-logo-mini" href="{{ route('admin.home') }}"><img src="{{ URL::asset('assets/images/Logo.png') }}" alt=""></a>--}}

        <a class="navbar-brand brand-logo" href="{{ route('admin.home') }}"><img src="{{asset($setting->logo)}}" alt=""></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('admin.home') }}"><img src="{{asset($setting->logo)}}" alt=""></a>


    </div>
    <!-- Top bar left -->
    <ul class="nav navbar-nav mr-auto">
        <li class="nav-item">
            <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left"
                href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
        </li>

    </ul>
    <!-- top bar right -->
    <ul class="nav navbar-nav ml-auto">

        <div class="btn-group mb-1">
            <button type="button" class="btn btn-light btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <img src="{{ URL::asset('assets/images/flags/EG.png') }}" alt="">
              </button>
            <div class="dropdown-menu">
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            {{ $properties['native'] }}
                        </a>
                @endforeach
            </div>
        </div>


{{--        <li class="nav-item dropdown ">--}}
{{--            <a class="nav-link top-nav" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"--}}
{{--                aria-expanded="false">--}}
{{--                <i class="ti-bell"></i>--}}
{{--                <span class="badge badge-danger notification-status"> </span>--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu dropdown-menu-right dropdown-big dropdown-notifications">--}}
{{--                <div class="dropdown-header notifications">--}}
{{--                    <strong>gmail</strong>--}}
{{--                    <span class="badge badge-pill badge-warning">05</span>--}}
{{--                </div>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a href="#" class="dropdown-item">New registered user <small--}}
{{--                        class="float-right text-muted time">Just now</small> </a>--}}
{{--                <a href="#" class="dropdown-item">New invoice received <small--}}
{{--                        class="float-right text-muted time">22 mins</small> </a>--}}
{{--                <a href="#" class="dropdown-item">Server error report<small--}}
{{--                        class="float-right text-muted time">7 hrs</small> </a>--}}
{{--                <a href="#" class="dropdown-item">Database report<small class="float-right text-muted time">1--}}
{{--                        days</small> </a>--}}
{{--                <a href="#" class="dropdown-item">Order confirmation<small class="float-right text-muted time">2--}}
{{--                        days</small> </a>--}}
{{--            </div>--}}
{{--        </li>--}}


        <li class="nav-item dropdown mr-30">
            <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="true" aria-expanded="false">
                <img src="{{admin() ? (admin()->image == null ? asset('assets/default/images.jfif') : asset(admin()->image)) : asset('assets/default/images.jfif') }}" alt="avatar">


            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">
                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-0">{{admin() ? admin()->name : ''}}</h5>
                            <span>{{admin() ? admin()->email : ''}}</span>
                        </div>
                    </div>
                </div>

                <a class="dropdown-item" href="{{route('setting.edit')}}"><i class="text-info ti-settings"></i>{{trans('dashboard.setting')}}</a>
                    <form method="GET" action="{{route('admin.logout')}}">
                @csrf
                <a class="dropdown-item" href="#" onclick="event.preventDefault();this.closest('form').submit();"><i class="bx bx-log-out"></i>{{trans('dashboard.logout')}}</a>
            </form>

            </div>
        </li>
    </ul>
</nav>

<!--=================================
header End-->
