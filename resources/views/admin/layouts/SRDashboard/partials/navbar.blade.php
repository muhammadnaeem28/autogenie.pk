<div class="top-menu">
    <ul class="nav navbar-nav pull-right">
        <!-- END TODO DROPDOWN -->
        <!-- BEGIN USER LOGIN DROPDOWN -->
        <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
        <li class="dropdown dropdown-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <img alt="" class="img-circle" src="{{Auth::user()->image_url}}" />
                <span class="username username-hide-on-mobile"> {{Auth::user()->email}}  </span>
                <i class="fa fa-angle-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-default">
                <li>
                    <a href="{{route('home.index')}}">
                        <i class="icon-home"></i> Public Site</a>
                </li>
                <li>
                    <a href="{{route('admin.dashboard')}}">
                        <i class="icon-home"></i> Dashboard</a>
                </li>
                <li>
                    <a href="{{route('admin.SRDashboard')}}">
                        <i class="icon-home"></i>SR Dashboard</a>
                </li>


                {{--                <li>
                                    <a href="app_calendar.html">
                                        <i class="icon-calendar"></i> My Calendar </a>
                                </li>
                                <li>
                                    <a href="app_inbox.html">
                                        <i class="icon-envelope-open"></i> My Inbox
                                        <span class="badge badge-danger"> 3 </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="app_todo.html">
                                        <i class="icon-rocket"></i> My Tasks
                                        <span class="badge badge-success"> 7 </span>
                                    </a>
                                </li>--}}
                <li class="divider"> </li>
                {{--<li>
                    <a href="page_user_lock_1.html">
                        <i class="icon-lock"></i> Lock Screen </a>
                </li>--}}
                <li>
                    <a href="{{route('auth.logout')}}">
                        <i class="icon-key"></i> Log Out </a>
                </li>
            </ul>
        </li>
        <li class="dropdown dropdown-quick-sidebar-toggler">
            <a href="javascript:;" class="dropdown-toggle">
                <i class="icon-logout"></i>
            </a>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
    </ul>
</div>
