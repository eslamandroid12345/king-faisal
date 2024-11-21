<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('V2/img/faisal_3.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{__('dashboard.faisal_title')}}</a>
            </div>
        </div>

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset(admin()->image)}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{admin()->name}}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">


                {{-- start seting--}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-paperclip"></i>
                        <p>
                            {{trans('dashboard.home')}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('admin.home')}}" class="nav-link">
                                <p>{{trans('dashboard.home_page')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('setting.edit')}}" class="nav-link">
                                <p>{{trans('dashboard.setting')}}</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- end seting--}}




                {{-- start slide down of users --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            {{trans('dashboard.users_all')}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('users.index')}}" class="nav-link">
                                <p>{{trans('dashboard.users_all')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('members')}}" class="nav-link">
                                <p>{{trans('dashboard.members_all')}}</p>
                            </a>
                        </li>

                    </ul>
                </li>
                {{-- end slide down of users --}}




                {{--start admins--}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            {{trans('dashboard.admins_all')}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>{{trans('dashboard.permissions')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('admin.index')}}" class="nav-link">
                                <p>{{trans('dashboard.employees')}}</p>
                            </a>
                        </li>

                    </ul>
                </li>

                {{--end admins--}}

                {{--start wbsite pages --}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-arrow-up"></i>
                        <p>
                            {{trans('dashboard.website_pages')}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">



                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>{{trans('dashboard.nav')}} </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <p>{{trans('dashboard.website_pages')}} </p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('sliders.index')}}" class="nav-link">
                                <p>{{trans('dashboard.sliders')}} </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('visions.index')}}" class="nav-link">
                                <p>{{trans('dashboard.vision')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('messages.index')}}" class="nav-link">
                                <p>{{trans('dashboard.message')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('values.index')}}" class="nav-link">
                                <p>{{trans('dashboard.values')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('research_paper_departments.index')}}" class="nav-link">
                                <p>{{trans('dashboard.research_paper_departments')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('research_papers.index')}}" class="nav-link">
                                <p>{{trans('dashboard.research_papers')}}</p>
                            </a>
                        </li>



                    </ul>
                </li>

                {{--end website pages --}}



                {{--start board_of_management --}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-info"></i>
                        <p>
                            {{trans('dashboard.about_the_center')}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('about_us_informations.index')}}" class="nav-link">
                                <p>{{trans('dashboard.about_center')}} </p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('chairman_of_the_boards.index')}}" class="nav-link">
                                <p>{{trans('dashboard.chairman_of_board_of_directors')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('roles_around_the_world_sections.index')}}" class="nav-link">
                                <p>{{trans("dashboard.his_Highness's_roles_around_the_world")}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('awards.index')}}" class="nav-link">
                                <p>{{trans('dashboard.awards')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('honorary_degrees.index')}}" class="nav-link">
                                <p>{{trans('dashboard.honorary_degree')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('center_dates.index')}}" class="nav-link">
                                <p>{{trans('dashboard.CenterDate')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('chairman_of_the_board_news.index')}}" class="nav-link">
                                <p>{{trans('dashboard.chairman_of_the_board_of_directors_news')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('managements.index')}}" class="nav-link">
                                <p>{{trans('dashboard.Management')}}</p>
                            </a>
                        </li>



                    </ul>
                </li>

                {{--end board_of_management --}}




                {{--start media center department --}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            {{trans('dashboard.media_center_department')}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('news.index')}}" class="nav-link">
                                <p>{{trans('dashboard.media_center_department_news')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('events.index')}}" class="nav-link">
                                <p>{{trans('dashboard.media_center_department_previous_events')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('next_events')}}" class="nav-link">
                                <p>{{trans('dashboard.media_center_department_next_events_section')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('media_center_videos.index')}}" class="nav-link">
                                <p>{{trans('dashboard.media_center_department_videos')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('annual_offers.index')}}" class="nav-link">
                                <p>{{trans('dashboard.media_center_department_annual_offer')}}</p>
                            </a>
                        </li>



                    </ul>
                </li>

                {{--end media center department --}}



                {{--start faisal --}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            {{trans('dashboard.faisal')}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('faisal_home.edit')}}" class="nav-link">
                                <p>{{trans('dashboard.about_the_house')}}</p>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a href="{{route('documents.index')}}" class="nav-link">
                                <p>{{trans('dashboard.the_documents_and_printed_materials')}}</p>
                            </a>
                        </li>



                        <li class="nav-item">
                            <a href="{{route('images.index')}}" class="nav-link">
                                <p>{{trans('dashboard.faisal_home_page_images')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('videos.index')}}" class="nav-link">
                                <p>{{trans('dashboard.faisal_home_page_videos')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('sounds.index')}}" class="nav-link">
                                <p>{{trans('dashboard.faisal_home_page_sounds')}}</p>
                            </a>
                        </li>


                    </ul>
                </li>

                {{--end faisal --}}




                {{--start book store --}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            {{trans('dashboard.book_store')}}
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{route('bookCategories.index')}}" class="nav-link">
                                <p>{{trans('dashboard.books_department')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('authors.index')}}" class="nav-link">
                                <p>{{trans('dashboard.authors')}}</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('books.index')}}" class="nav-link">
                                <p>{{trans('dashboard.book_store')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('cities.index')}}" class="nav-link">
                                <p>{{trans('dashboard.cities')}}</p>
                            </a>
                        </li>


                        <li class="nav-item">
                            <a href="{{route('point_of_sales.index')}}" class="nav-link">
                                <p>{{trans('dashboard.point_of_sale')}}</p>
                            </a>
                        </li>


                    </ul>
                </li>

                {{--end book store --}}



                {{--start antiques --}}

                <li class="nav-item">
                    <a href="{{route('antiques.index')}}" class="nav-link">
                        <i class="fas fa-hourglass-start nav-icon"></i>
                        <p>
                            {{trans('dashboard.department_of_archaeological_antiquities')}}
                        </p>
                    </a>
                </li>
                {{--end antiques --}}


                {{--start coupons--}}
                <li class="nav-item">
                    <a href="{{route('coupons.index')}}" class="nav-link">
                        <i class="fa fa-percent nav-icon"></i>
                        <p>
                            {{trans('dashboard.coupons_discount')}}
                        </p>
                    </a>
                </li>
                {{--end coupons--}}

                {{-- start payment orders--}}
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-shopping-cart nav-icon"></i>
                        <p>
                            {{trans('dashboard.cart')}}
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-id-card nav-icon"></i>
                        <p>
                            {{trans('dashboard.membership_services')}}
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-file-pdf nav-icon"></i>
                        <p>
                            {{trans('dashboard.servy_request')}}
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-search-plus nav-icon"></i>
                        <p>
                            {{trans('dashboard.information_request')}}
                        </p>
                    </a>
                </li>

                {{-- end payment orders--}}
                {{--start  banks information --}}

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-university nav-icon"></i>
                        <p>
                            {{trans('dashboard.banks')}}
                        </p>
                    </a>
                </li>

                {{--end  banks information --}}



                {{--start  payment tranacton --}}


                <li class="nav-item">
                    <a href="{{route('payments.transfers')}}" class="nav-link">
                        <i class="fas fa-money-bill nav-icon"></i>
                        <p>
                            {{trans('dashboard.payment_receipts')}}
                            <span class="badge badge-danger right">0</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-money-bill nav-icon"></i>
                        <p>
                            {{trans('dashboard.payment_online')}}
                        </p>
                    </a>
                </li>

                {{--end  payment transactions --}}




                {{--start  messages of users --}}


                <li class="nav-item">
                    <a href="{{route('university_messages.index')}}" class="nav-link">
                        <i class="fas fa-book nav-icon"></i>
                        <p>
                            {{trans('dashboard.recorded_messages')}}
                            <span class="badge badge-danger right">0</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('message_deposits.index')}}" class="nav-link">
                        <i class="fas fa-box nav-icon"></i>
                        <p>
                            {{trans('dashboard.creative_messages')}}
                            <span class="badge badge-danger right">3</span>
                        </p>
                    </a>
                </li>

                {{--end messages of users --}}





                {{--start visit requests --}}


                <li class="nav-item">
                    <a href="{{route('entities.index')}}" class="nav-link">
                        <i class="fas fa-building nav-icon"></i>
                        <p>
                            {{trans('dashboard.all_sides')}}

                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('visitors.index')}}" class="nav-link">
                        <i class="fas fa-bus nav-icon"></i>
                        <p>
                            {{trans('dashboard.visit_requests')}}
                            <span class="badge badge-danger right">3</span>
                        </p>
                    </a>
                </li>

                {{--end visit requests --}}



                <li class="nav-item">
                    <a href="{{route('contacts.index')}}" class="nav-link">
                        <i class="fas fa-envelope nav-icon"></i>
                        <p>
                            {{trans('dashboard.contact_us')}}
                            <span class="badge badge-danger right">2</span>
                        </p>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
