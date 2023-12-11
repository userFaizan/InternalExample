<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <div class="navbar-brand">
        <button class="btn-menu ls-toggle-btn" type="button"><i class="zmdi zmdi-menu"></i></button>
        <a href="index.html"><img src="{{asset('assets/images/logo.jpeg')}}" width="25" alt="Aero"><span class="m-l-10">Aero</span></a>
    </div>
    <div class="menu">
        <ul class="list">
            <li>
                <div class="user-info">
                    <a class="image" href="profile.html"><img src="{{asset('assets/images/profile_av.jpg')}}"
                                                              alt="User"></a>
                    <div class="detail">
                        <h4>Michael</h4>
                        <small>Super Admin</small>
                    </div>
                </div>
            </li>
            <li class="active open"><a href="{{route('dashboard')}}"><i
                        class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>User</span></a>
                <ul class="ml-menu">
                    <li><a href="{{route('user.create')}}">Add Users</a></li>
                    <li><a href="{{route('user.index')}}">All Users</a></li>
                    {{--                                        <li><a href="events.html">Calendar</a></li>--}}
                    {{--                                        <li><a href="contact.html">Contact</a></li>--}}
                </ul>
            </li>
            <li><a href="javascript:void(0);" class="menu-toggle"><i
                        class="zmdi zmdi-blogger"></i><span>Questions</span></a>
                <ul class="ml-menu">
                    <li><a href="{{route('question.create')}}">Add Questions</a></li>
                    <li><a href="{{route('question.index')}}">Questions List</a></li>
                </ul>
            </li>
                        <li><a href="javascript:void(0);" class="menu-toggle"><i
                                        class="zmdi zmdi-assignment"></i><span>Question Options</span></a>
                            <ul class="ml-menu">
                                <li><a href="{{route('questionoption.index')}}">Options List</a></li>
                                <li><a href="{{route('questionoption.create')}}">Add Options</a></li>
                            </ul>
                        </li>
            {{--            <li><a href="javascript:void(0);" class="menu-toggle"><i--}}
            {{--                            class="zmdi zmdi-shopping-cart"></i><span>Services</span></a>--}}
            {{--                <ul class="ml-menu">--}}
            {{--                    <li><a href="{{route('services.index')}}">Services List</a></li>--}}
            {{--                    <li><a href="{{route('services.create')}}">Add Service</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-folder"></i><span>Plans</span></a>--}}
            {{--                <ul class="ml-menu">--}}
            {{--                    <li><a href="{{route('plans.index')}}">Plans List</a></li>--}}
            {{--                    <li><a href="{{route('plans.create')}}">Add Plan</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}
            {{--            <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Orders</span></a>--}}
            {{--                <ul class="ml-menu">--}}
            {{--                    <li><a href="{{route('orders.index')}}">Orders List</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

            {{--            <li class="open_top"><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Payments</span></a>--}}
            {{--                <ul class="ml-menu">--}}
            {{--                    <li><a href="{{route('payments.index')}}">Payment List</a></li>--}}
            {{--                </ul>--}}
            {{--            </li>--}}

        </ul>
    </div>
</aside>
