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




            @foreach(['event', 'booking', 'product', 'pitch', 'campsite', 'zone', 'tent', 'user'] as $name)

                    <!-- {{$name}} -->

            <li class="@if(request()->is('admin/'.$name.'*')) opened @endif">
                <a href="{{ url('admin/'.$name)  }}">
                    <i class="entypo-layout"></i>
                    <span class="title">{{str_plural($name)}}</span>
                </a>
                <ul>
                    <li class="@if(request()->is('admin/'.$name)) active open multiple-expanded @endif">
                        <a href="{{ url('admin/'.$name)  }}">
                            <span class="title">View</span>
                        </a>
                    </li>

                    <li class="@if(request()->is('admin/'.$name.'/create'))  active  @endif">
                        <a href="{{ url('admin/'.$name.'/create')  }}">
                            <span class="title">Create</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- {{$name}} End -->

            @endforeach



        </ul>

    </div>

</div>