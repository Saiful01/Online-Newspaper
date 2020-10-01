<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li class="has_sub">
                    <a href="/admin-home" class="waves-effect"><i class="ti-home"></i>
                        <span> Dashboard </span></a>
                </li>
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="md md-list"></i>
                        <span> Post </span>
                        <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="/post/create">New Posts</a></li>
                        <li><a href="/post/show">All Posts</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="/comment/show" class="waves-effect"><i class="md md-message"></i>
                        <span> Manage Comment </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="md md-unfold-more"></i>
                        <span> Categories </span>
                        <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="/category/create">New Category</a></li>
                        <li><a href="/category/show">All Category</a></li>
                    </ul>
                </li>

       {{--         <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-exchange-vertical"></i>
                        <span>Exhibition</span>
                        <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="/exhibition/post/show">New Post</a></li>
                        <li><a href="/exhibition/show">All Exhibition</a></li>
                    </ul>
                </li>--}}

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-exchange-vertical"></i>
                        <span>Videos</span>
                        <span class="menu-arrow"></span> </a>
                    <ul class="list-unstyled">
                        <li><a href="/video/create">New Video</a></li>
                        <li><a href="/video/show">All Videos</a></li>
                    </ul>
                </li>


                @if(session('user_type')==1)
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"><i class="icon-user"></i>
                            <span> Users </span>
                            <span class="menu-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="/user/create">New User</a></li>
                            <li><a href="/user/show">All User</a></li>
                        </ul>
                    </li>
                @endif



               {{-- @if(session('user_type')==1)
                    <li class="has_sub">
                        <a href="/menu/show" class="waves-effect"><i class="md md-explore"></i>
                            <span> Menu </span></a>
                    </li>

                    <li class="has_sub">
                        <a href="/advertisement/show" class="waves-effect"><i class="ti-exchange-vertical"></i>
                            <span> Manage Advertisement</span></a>
                    </li>

                @endif--}}


                <li class="has_sub">
                    <a href="/visitor-stat" class="waves-effect"><i class="md md-insert-chart"></i>
                        <span> Visitor Stat </span></a>
                </li>
                <li class="has_sub">
                    <a href="/settings" class="waves-effect"><i class="md md-settings"></i>
                        <span> Settings </span></a>
                </li>
                <li class="has_sub">
                    <a href="/logout" class="waves-effect"><i class="md md-settings-power"></i>
                        <span> Logout </span></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- Left Sidebar End -->