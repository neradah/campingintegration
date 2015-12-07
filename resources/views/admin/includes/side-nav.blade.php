 <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    Start Bootstrap
                </a>
            </li>
            <li>
                <a href="#">Dashboard</a>
            </li>

            <li class="@if(Request::is('admin/event')) active @endif">
                <a href="{{url('admin/event')}}">Events</a>
                <ul class="dropdown">
                    <li class="@if(Request::is('admin/event/create')) active @endif"><a href="{{url('admin/event/create')}}">Create</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Overview</a>
            </li>
            <li>
                <a href="#">Events</a>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

<script>

    $('.sidebar-nav a').on('click', function(e){

        e.preventDefault();

        if($(this).attr('href').length != 0){
            window.location.href = $(this).attr('href');
            return;
        }

        var dropdown = $(this).parent().find('.dropdown');

        if(dropdown.length == 0)
        {
            window.location.href = $(this).attr('href');
            return;
        }

        dropdown.toggle();

    });


    $(document).ready(function(){

        $('.sidebar-nav .active').parent().show();
        $('.sidebar-nav .active .dropdown').show();



    });

</script>

<style>
    .dropdown{
        display:none;
    }

</style>