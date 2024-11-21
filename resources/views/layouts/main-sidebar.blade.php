<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg" style="overflow: scroll">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item Dashboard-->
                    <li>
                <a href="#">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text#</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
                </li>
                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title"> {{lang() == 'ar' ? $setting->website_name_ar : $setting->website_name_en}} </li>

                    <!-- Home and Setting -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#setting">
                            <div class="pull-left"><i class="fas fa-paperclip"></i><span
                                    class="right-nav-text">{{trans('dashboard.home')}}</span></div>
                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="setting" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('admin.home')}}">{{trans('dashboard.home_page')}}</a></li>
                            <li><a href="{{route('setting.edit')}}">{{trans('dashboard.setting')}}</a></li>

                        </ul>
                    </li>


                    <!-- Members and Users-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Grades-menu">
                            <div class="pull-left"><i class="fas fa-users"></i><span
                                    class="right-nav-t">{{trans('dashboard.users_all')}}</span></div>
                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>
                            <div class="clearfix"></div>
                        </a>


                        <ul id="Grades-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('members')}}">{{trans('dashboard.members_all')}}</a></li>
                            <li><a href="{{route('users.index')}}">{{trans('dashboard.users_all')}}</a></li>

                        </ul>
                    </li>


                    <!-- admins-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#admins">
                            <div class="pull-left"><i class="fas fa-user"></i><span
                                    class="right-nav-t">{{trans('dashboard.admins_all')}}</span></div>
                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="admins" class="collapse" data-parent="#sidebarnav">
{{--                            <li><a href="#">{{trans('dashboard.roles')}}</a></li>--}}
                            <li><a href="#">{{trans('dashboard.permissions')}}</a></li>
                            <li><a href="{{route('admin.index')}}">{{trans('dashboard.employees')}}</a></li>

                        </ul>
                    </li>

                    <!-- Coupons-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#Users-icon">
                            <div class="pull-left"><i class="fas fa-credit-card"></i><span class="right-nav-text">{{trans('dashboard.coupons_discount')}}</span></div>
                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="Users-icon" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('coupons.index')}}">{{trans('dashboard.coupons')}}</a> </li>
                        </ul>
                    </li>


                    <!-- Books and Antiques Orders -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#books_orders">
                            <div class="pull-left"><i class="fas fa-shopping-cart"></i><span class="right-nav-text">{{trans('dashboard.books_and_antiquities')}}</span></div>
                            <div class="pull-right"><span class="badge badge-danger right">4</span></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="books_orders" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('new_orders')}}">{{trans('dashboard.new_orders_section')}}</a> </li>
                            <li> <a href="{{route('in_progress_orders')}}">{{trans('dashboard.in_progress_orders_section')}}</a> </li>
                            <li> <a href="{{route('finished_orders')}}">{{trans('dashboard.finished_orders_section')}}</a> </li>
                            <li> <a href="{{route('refused_orders')}}">{{trans('dashboard.refused_orders_section')}}</a> </li>

                        </ul>
                    </li>


                    <!--  membership_requests -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#membership_services">
                            <div class="pull-left"><i class="fas fa-id-card"></i><span class="right-nav-text">{{trans('dashboard.membership_services')}}  </span>  </div>
                            <div class="pull-right"><span class="badge badge-danger right">5</span></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="membership_services" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('membership_requests.new')}}">{{trans('dashboard.new_orders')}}</a> </li>
                            <li> <a href="{{route('membership_requests.finished')}}">{{trans('dashboard.finished_orders')}}</a> </li>
                            <li> <a href="{{route('membership_requests.refused')}}">{{trans('dashboard.refused_orders')}}</a> </li>
                        </ul>
                    </li>


                    <!--  membership_requests -->


                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#information_request">
                            <div class="pull-left"><i class="fas fa-search-plus"></i><span class="right-nav-text">{{trans('dashboard.information_request')}}</span></div>
                            <div class="pull-right"><span class="badge badge-danger right">7</span></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="information_request" class="collapse" data-parent="#sidebarnav">

                             <li> <a href="{{route('information_requests.new')}}">{{trans('dashboard.new_request_information')}}</a> </li>
                            <li> <a href="{{route('information_requests.accept')}}">{{trans('dashboard.accept_request_information')}}</a> </li>
                            <li> <a href="{{route('information_requests.refused')}}">{{trans('dashboard.refused_orders')}}</a> </li>
                            <li> <a href="{{route('information_requests.finished')}}">{{trans('dashboard.finished_orders')}}</a> </li>

                        </ul>
                    </li>



                    <!--  survey_request -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#survey_request">
                            <div class="pull-left"><i class="fas fa-file-pdf-o"></i><span class="right-nav-text">{{trans('dashboard.servy_request')}}</span></div>
                            <div class="pull-right"><span class="badge badge-danger right">2</span></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="survey_request" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('survey_requests.new')}}">{{trans('dashboard.new_orders')}}</a> </li>
{{--                            <li> <a href="{{route('survey_requests.in_progress')}}">{{trans('dashboard.in_progress_orders_section')}}</a> </li>--}}
                            <li> <a href="{{route('survey_requests.accept')}}">{{trans('dashboard.accept_orders')}}</a> </li>
{{--                            <li> <a href="{{route('survey_requests.under_processing')}}">{{trans('dashboard.under_processing_orders')}}</a> </li>--}}
                            <li> <a href="{{route('survey_requests.finished')}}">{{trans('dashboard.finished_orders')}}</a> </li>
                            <li> <a href="{{route('survey_requests.refused')}}">{{trans('dashboard.refused_orders')}}</a> </li>
                        </ul>
                    </li>




                    <!-- website_pages -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#pages">
                            <div class="pull-left"><i class="fas fa-sign-in"></i><span
                                    class="right-nav-text">{{trans('dashboard.website_pages')}}</span></div>
                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="pages" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('sliders.index')}}">{{trans('dashboard.sliders')}}</a></li>
                            <li><a href="{{route('visions.index')}}">{{trans('dashboard.vision')}}</a></li>
                            <li><a href="{{route('messages.index')}}">{{trans('dashboard.message')}}</a></li>
                            <li><a href="{{route('values.index')}}">{{trans('dashboard.values')}}</a></li>
                            <li><a href="{{route('research_paper_departments.index')}}">{{trans('dashboard.research_paper_departments')}}</a></li>
                            <li><a href="{{route('research_papers.index')}}">{{trans('dashboard.research_papers')}}</a></li>
                        </ul>
                    </li>

                    <!-- pages -->


{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_cycle">--}}
{{--                            <div class="pull-left"><i class="fas fa-bars"></i><span--}}
{{--                                    class="right-nav-text">{{trans('dashboard.pages')}}</span></div>--}}
{{--                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="pages_cycle" class="collapse" data-parent="#sidebarnav">--}}

{{--                            <li><a href="{{route('pages.index')}}">{{trans('dashboard.pages')}}</a></li>--}}
{{--                            <li><a href="{{route('page_contents.index')}}">{{trans('dashboard.content')}}</a></li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}




                    <!-- research pages -->
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#research">--}}
{{--                            <div class="pull-left"><i class="fas fa-search"></i><span--}}
{{--                                    class="right-nav-text">{{trans('dashboard.research')}}</span></div>--}}
{{--                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="research" class="collapse" data-parent="#sidebarnav">--}}

{{--                        @forelse($pages as $page)--}}

{{--                                <li><a href="{{route('pages.edit',$page->id)}}">{{ $page->translate(lang())->title}}</a></li>--}}

{{--                            @empty--}}
{{--                                <li><a href="#">{{trans('dashboard.no_pages_found')}}</a></li>--}}
{{--                            @endforelse--}}

{{--                        </ul>--}}
{{--                    </li>--}}



                    <!-- research programs -->
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#research_program">--}}
{{--                            <div class="pull-left"><i class="fas fa-long-arrow-down"></i><span--}}
{{--                                    class="right-nav-text">{{trans('dashboard.research_program')}}</span></div>--}}
{{--                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="research_program" class="collapse" data-parent="#sidebarnav">--}}

{{--                            @forelse($pages_research_programs as $page)--}}

{{--                                <li><a href="{{route('pages.edit',$page->id)}}">{{ $page->title}}</a></li>--}}

{{--                            @empty--}}
{{--                                <li><a href="#">{{trans('dashboard.no_pages_found')}}</a></li>--}}
{{--                            @endforelse--}}

{{--                        </ul>--}}
{{--                    </li>--}}


              <!-- museum pages -->
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#museum_page">--}}
{{--                            <div class="pull-left"><i class="fas fa-home"></i><span--}}
{{--                                    class="right-nav-text">{{trans('dashboard.museum_page')}}</span></div>--}}
{{--                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="museum_page" class="collapse" data-parent="#sidebarnav">--}}

{{--                            @forelse($museum_pages as $page)--}}

{{--                                <li><a href="{{route('pages.edit',$page->id)}}">{{ $page->title}}</a></li>--}}

{{--                            @empty--}}
{{--                                <li><a href="#">{{trans('dashboard.no_pages_found')}}</a></li>--}}
{{--                            @endforelse--}}

{{--                        </ul>--}}
{{--                    </li>--}}



                    {{--                    <!-- page_contents -->--}}
{{--                    <li>--}}
{{--                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#research_page_contents">--}}
{{--                            <div class="pull-left"><i class="fas fa-paragraph"></i><span--}}
{{--                                    class="right-nav-text">{{trans('dashboard.research_content')}}</span></div>--}}
{{--                            <div class="pull-right"><i class="ti-plus"></i></div>--}}
{{--                            <div class="clearfix"></div>--}}
{{--                        </a>--}}
{{--                        <ul id="research_page_contents" class="collapse" data-parent="#sidebarnav">--}}

{{--                            <li><a href="{{route('page_contents.index')}}">{{trans('dashboard.research_content_section')}}</a></li>--}}
{{--                            <li><a href="#">{{trans('dashboard.research_page_content_pdf')}}</a></li>--}}

{{--                        </ul>--}}
{{--                    </li>--}}

                    <!-- board_of_management -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#management">
                            <div class="pull-left"><i class="fas fa-info"></i><span
                                    class="right-nav-text">{{trans('dashboard.about_the_center')}}</span></div>
                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="management" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('about_us_informations.index')}}">{{trans('dashboard.about_center')}}</a></li>
                            <li><a href="{{route('chairman_of_the_boards.index')}}">{{trans('dashboard.chairman_of_board_of_directors')}}</a></li>
                            <li><a href="{{route('roles_around_the_world_sections.index')}}">{{trans("dashboard.his_Highness's_roles_around_the_world")}}</a></li>
                            <li><a href="{{route('awards.index')}}">{{trans('dashboard.awards')}}</a></li>
                            <li><a href="{{route('honorary_degrees.index')}}">{{trans('dashboard.honorary_degree')}}</a></li>
                            <li><a href="{{route('center_dates.index')}}">{{trans('dashboard.CenterDate')}}</a></li>
                            <li><a href="{{route('chairman_of_the_board_news.index')}}">{{trans('dashboard.chairman_of_the_board_of_directors_news')}}</a></li>
                            <li><a href="{{route('managements.index')}}">{{trans('dashboard.Management')}}</a></li>

                        </ul>
                    </li>

                    <!-- media center department -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#media_center_department">
                            <div class="pull-left"><i class="fas fa-tasks"></i><span
                                    class="right-nav-text">{{trans('dashboard.media_center_department')}}</span></div>
                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="media_center_department" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('news.index')}}">{{trans('dashboard.media_center_department_news')}}</a></li>
                            <li><a href="{{route('events.create')}}">{{trans('dashboard.media_center_department_add_event')}}</a></li>
                            <li><a href="{{route('events.index')}}">{{trans('dashboard.media_center_department_previous_events')}}</a></li>
                            <li><a href="{{route('next_events')}}">{{trans('dashboard.media_center_department_next_events_section')}}</a></li>
                            <li><a href="{{route('videos.index')}}">{{trans('dashboard.media_center_department_videos')}}</a></li>
                            <li><a href="{{route('annual_offers.index')}}">{{trans('dashboard.media_center_department_annual_offer')}}</a></li>
                        </ul>
                    </li>




                    <!-- faisal-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#faisal">
                            <div class="pull-left"><i class="fas fa-home"></i><span class="right-nav-text">{{trans('dashboard.faisal')}}</span></div>
                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="faisal" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('faisal_home.edit')}}">{{trans('dashboard.about_the_house')}}</a> </li>
                            <li> <a href="{{route('setting.edit')}}">{{trans('dashboard.king_faisal_and_this_family')}}</a> </li>
                            <li> <a href="{{route('documents.index')}}">{{trans('dashboard.the_documents_and_printed_materials')}}</a> </li>
                            <li> <a href="{{route('images.index')}}">{{trans('dashboard.faisal_home_page_images')}}</a> </li>
                            <li> <a href="{{route('videos.index')}}">{{trans('dashboard.faisal_home_page_videos')}}</a> </li>
                            <li> <a href="{{route('sounds.index')}}">{{trans('dashboard.faisal_home_page_sounds')}}</a> </li>


                        </ul>
                    </li>


                    <!-- BookStore -->

                       <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#classes-menu">
                            <div class="pull-left"><i class="fa fa-book"></i><span
                                    class="right-nav-text">{{trans('dashboard.book_store')}}</span></div>
                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="classes-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('bookCategories.index')}}">{{trans('dashboard.books_department')}}</a></li>
                            <li><a href="{{route('authors.index')}}">{{trans('dashboard.authors')}}</a></li>
                            <li><a href="{{route('books.index')}}">{{trans('dashboard.book_store')}}</a></li>
                            <li><a href="{{route('cities.index')}}">{{trans('dashboard.cities')}}</a></li>
                            <li><a href="{{route('point_of_sales.index')}}">{{trans('dashboard.point_of_sale')}}</a></li>
                        </ul>
                    </li>


                    <!-- antiquities-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#sections-menu">
                            <div class="pull-left"><i class="fas fa-hourglass-start"></i><span
                                    class="right-nav-text">{{trans('dashboard.department_of_archaeological_antiquities')}}</span></div>
                            <div class="pull-right"><i class="fas fa-angle-left right"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="sections-menu" class="collapse" data-parent="#sidebarnav">
                            <li><a href="{{route('antiques.index')}}">{{trans('dashboard.archaeological_antiquities')}}</a></li>
                        </ul>
                    </li>


                    <!-- messages of users-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#messages">
                            <div class="pull-left"><i class="fas fa-address-book"></i><span class="right-nav-text">{{trans('dashboard.university_messages')}}</span></div>
                            <div class="pull-right"><span class="badge badge-danger right">6</span></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="messages" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('university_messages.index')}}">{{trans('dashboard.recorded_messages')}}</a> </li>
                            <li> <a href="{{route('message_deposits.index')}}">{{trans('dashboard.creative_messages')}}</a> </li>
                        </ul>
                    </li>



                    <!-- Contact -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#contact">
                            <div class="pull-left"><i class="fas fa-inbox"></i><span class="right-nav-text">{{trans('dashboard.contact_us')}}</span></div>
                            <div class="pull-right"><span class="badge badge-danger right">1</span></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="contact" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('contacts.index')}}">{{trans('dashboard.all_messages')}}</a> </li>
                        </ul>
                    </li>


                    <!-- Visitors -->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#visit">
                            <div class="pull-left"><i class="fas fa-bus"></i><span class="right-nav-text">{{trans('dashboard.visit_requests')}}</span></div>
                            <div class="pull-right"><span class="badge badge-danger right">0</span></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="visit" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{route('entities.index')}}">{{trans('dashboard.all_sides')}}</a> </li>
                            <li> <a href="{{route('visitors.index')}}">{{trans('dashboard.all_orders')}}</a> </li>
                        </ul>
                    </li>


                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
