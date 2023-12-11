{{--<!-- Left Sidebar -->--}}
{{--<aside id="leftsidebar" class="sidebar">--}}
{{--    <div class="navbar-brand">--}}
{{--        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>--}}
{{--        <a href="index.html"><img src="{{asset('assets/images/logo.jpeg')}}" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>--}}
{{--    </div>--}}
{{--    <div class="menu">--}}
{{--        <ul class="list">--}}
{{--            <li>--}}
{{--                <div class="user-info">--}}
{{--                    <a class="image" href="profile.html"><img src="{{asset('assets/images/profile_av.jpg')}}"--}}
{{--                                                              alt="User"></a>--}}
{{--                    <div class="detail">--}}
{{--                        <h4>Michael</h4>--}}
{{--                        <small>Super Admin</small>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </li>--}}
{{--            <li class="active open"><a href="{{route('dashboard')}}"><i--}}
{{--                        class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>--}}
{{--            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>User</span></a>--}}
{{--                <ul class="ml-menu">--}}
{{--                    <li><a href="{{route('user.create')}}">Add Users</a></li>--}}
{{--                    <li><a href="{{route('user.index')}}">All Users</a></li>--}}
{{--                    --}}{{--                                        <li><a href="events.html">Calendar</a></li>--}}
{{--                    --}}{{--                                        <li><a href="contact.html">Contact</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--            <li><a href="javascript:void(0);" class="menu-toggle"><i--}}
{{--                        class="zmdi zmdi-blogger"></i><span>Questions</span></a>--}}
{{--                <ul class="ml-menu">--}}
{{--                    <li><a href="{{route('question.create')}}">Add Questions</a></li>--}}
{{--                    <li><a href="{{route('question.index')}}">Questions List</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--                        <li><a href="javascript:void(0);" class="menu-toggle"><i--}}
{{--                                        class="zmdi zmdi-assignment"></i><span>Question Options</span></a>--}}
{{--                            <ul class="ml-menu">--}}
{{--                                <li><a href="{{route('questionoption.index')}}">Options List</a></li>--}}
{{--                                <li><a href="{{route('questionoption.create')}}">Add Options</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--            --}}{{--            <li><a href="javascript:void(0);" class="menu-toggle"><i--}}
{{--            --}}{{--                            class="zmdi zmdi-shopping-cart"></i><span>Services</span></a>--}}
{{--            --}}{{--                <ul class="ml-menu">--}}
{{--            --}}{{--                    <li><a href="{{route('services.index')}}">Services List</a></li>--}}
{{--            --}}{{--                    <li><a href="{{route('services.create')}}">Add Service</a></li>--}}
{{--            --}}{{--                </ul>--}}
{{--            --}}{{--            </li>--}}
{{--            --}}{{--            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>Plans</span></a>--}}
{{--            --}}{{--                <ul class="ml-menu">--}}
{{--            --}}{{--                    <li><a href="{{route('plans.index')}}">Plans List</a></li>--}}
{{--            --}}{{--                    <li><a href="{{route('plans.create')}}">Add Plan</a></li>--}}
{{--            --}}{{--                </ul>--}}
{{--            --}}{{--            </li>--}}
{{--            --}}{{--            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Orders</span></a>--}}
{{--            --}}{{--                <ul class="ml-menu">--}}
{{--            --}}{{--                    <li><a href="{{route('orders.index')}}">Orders List</a></li>--}}
{{--            --}}{{--                </ul>--}}
{{--            --}}{{--            </li>--}}

{{--            --}}{{--            <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Payments</span></a>--}}
{{--            --}}{{--                <ul class="ml-menu">--}}
{{--            --}}{{--                    <li><a href="{{route('payments.index')}}">Payment List</a></li>--}}
{{--            --}}{{--                </ul>--}}
{{--            --}}{{--            </li>--}}

{{--        </ul>--}}
{{--    </div>--}}
{{--</aside>--}}
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="{{asset('assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Internal Example </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Super Admin</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{route('dashboard')}}" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="./index.html" class="nav-link active">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Dashboard v1</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="./index2.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Dashboard v2</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="./index3.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Dashboard v3</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Users
                            <i class="fas fa-angle-left right"></i>
{{--                            <span class="badge badge-info right">6</span>--}}
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('user.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('user.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Users</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Questions
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('question.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Questions</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('question.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Questions List</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Question Options
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('questionoption.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Options List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('questionoption.create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Options</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="nav-icon fas fa-power-off"></i>
                        <p>
                            Logout
                            <i class="fas fa-angle-left right"></i>
                        </p>
         </a>
</li>
{{--                <li class="nav-header">EXAMPLES</li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/calendar.html" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-calendar-alt"></i>--}}
{{--                        <p>--}}
{{--                            Calendar--}}
{{--                            <span class="badge badge-info right">2</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/gallery.html" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-image"></i>--}}
{{--                        <p>--}}
{{--                            Gallery--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/kanban.html" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-columns"></i>--}}
{{--                        <p>--}}
{{--                            Kanban Board--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-envelope"></i>--}}
{{--                        <p>--}}
{{--                            Mailbox--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/mailbox/mailbox.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Inbox</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/mailbox/compose.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Compose</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/mailbox/read-mail.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Read</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-book"></i>--}}
{{--                        <p>--}}
{{--                            Pages--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/invoice.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Invoice</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/profile.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Profile</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/e-commerce.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>E-commerce</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/projects.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Projects</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/project-add.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Project Add</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/project-edit.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Project Edit</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/project-detail.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Project Detail</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/contacts.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Contacts</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/faq.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>FAQ</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/contact-us.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Contact us</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon far fa-plus-square"></i>--}}
{{--                        <p>--}}
{{--                            Extras--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>--}}
{{--                                    Login & Register v1--}}
{{--                                    <i class="fas fa-angle-left right"></i>--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                            <ul class="nav nav-treeview">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/examples/login.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Login v1</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/examples/register.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Register v1</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/examples/forgot-password.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Forgot Password v1</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/examples/recover-password.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Recover Password v1</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>--}}
{{--                                    Login & Register v2--}}
{{--                                    <i class="fas fa-angle-left right"></i>--}}
{{--                                </p>--}}
{{--                            </a>--}}
{{--                            <ul class="nav nav-treeview">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/examples/login-v2.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Login v2</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/examples/register-v2.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Register v2</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/examples/forgot-password-v2.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Forgot Password v2</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="pages/examples/recover-password-v2.html" class="nav-link">--}}
{{--                                        <i class="far fa-circle nav-icon"></i>--}}
{{--                                        <p>Recover Password v2</p>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/lockscreen.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Lockscreen</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/legacy-user-menu.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Legacy User Menu</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/language-menu.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Language Menu</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/404.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Error 404</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/500.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Error 500</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/pace.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Pace</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/examples/blank.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Blank Page</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="starter.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Starter Page</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-search"></i>--}}
{{--                        <p>--}}
{{--                            Search--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/search/simple.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Simple Search</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/search/enhanced.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Enhanced</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}




            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
