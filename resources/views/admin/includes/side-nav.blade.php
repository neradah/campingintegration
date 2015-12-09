<div class="sidebar-menu">

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="index.html">
                    <img src="{{asset('img/cms_logo.png')}}" width="120" alt="" />
                </a>
            </div>

            <!-- logo collapse icon -->
            <div class="sidebar-collapse">
                <a href="#" class="sidebar-collapse-icon"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                    <i class="entypo-menu"></i>
                </a>
            </div>


            <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
            <div class="sidebar-mobile-menu visible-xs">
                <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                    <i class="entypo-menu"></i>
                </a>
            </div>

        </header>


        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
            <li class="@if(request()->is('admin/home')) active @endif">
                <a href="{{url('admin/home')}}">
                    <i class="entypo-monitor"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <!--Bookings -->

            <li class="@if(request()->is('admin/booking')) opened @endif">
                <a href="{{ url('admin/booking')  }}">
                    <i class="entypo-layout"></i>
                    <span class="title">Bookings</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('admin/booking')  }}">
                            <span class="title">View</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/booking/create')  }}">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Booking End -->

            <!--Events -->

            <li class="@if(request()->is('admin/event')) opened @endif">
                <a href="{{ url('admin/event')  }}">
                    <i class="entypo-layout"></i>
                    <span class="title">Events</span>
                </a>
                <ul>
                    <li class="@if(request()->is('admin/event')) active open multiple-expanded @endif">
                        <a href="{{ url('admin/event')  }}">
                            <span class="title">View</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/event/create')  }}">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Events End -->


            <!-- Products -->

            <li class="@if(request()->is('admin/product')) opened @endif">
                <a href="{{ url('admin/product')  }}">
                    <i class="entypo-layout"></i>
                    <span class="title">Products</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('admin/product')  }}">
                            <span class="title">View</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/product/create')  }}">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Products End -->

            <!-- Pitch Groups -->

            <li class="@if(request()->is('admin/pitch')) opened @endif">
                <a href="{{ url('admin/pitch')  }}">
                    <i class="entypo-layout"></i>
                    <span class="title">Pitch Groups</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('admin/pitch')  }}">
                            <span class="title">View</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/pitch/create')  }}">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Pitch Groups End -->

            <!-- Users -->

            <li>
                <a href="{{ url('admin/user')  }}">
                    <i class="entypo-layout"></i>
                    <span class="title">Users</span>
                </a>
                <ul>
                    <li>
                        <a href="{{ url('admin/user')  }}">
                            <span class="title">View</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/user/create')  }}">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- Users -->

        </ul>

    </div>

</div>