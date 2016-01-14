 {{-- left side start --}}
<div class="left-side sticky-left-side">

    <!--logo and iconic logo start-->
    <div class="logo">
        <a href="{!! url('admin') !!}">{!! Html::image('images/logo.png') !!}</a>
    </div>

    <div class="logo-icon text-center">
        <a href="{!! url('admin') !!}">{!! Html::image('images/logo_icon.png') !!}</a>
    </div>
    <!--logo and iconic logo end-->

    <div class="left-side-inner">

        <!-- visible to small devices only -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media logged-user">
                <img alt="" src="images/photos/user-avatar.png" class="media-object">
                <div class="media-body">
                    <h4><a href="#">John Doe</a></h4>
                    <span>"Hello There..."</span>
                </div>
            </div>

            <h5 class="left-nav-title">Account Information</h5>
            <ul class="nav nav-pills nav-stacked custom-nav">
              <li><a href="#"><i class="fa fa-user"></i> <span>Profile</span></a></li>
              <li><a href="#"><i class="fa fa-cog"></i> <span>Settings</span></a></li>
              <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>

        <!--sidebar nav start-->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="menu-list nav-active"><a href="{!! url('admin') !!}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
                <ul class="sub-menu-list">
                   @if(Auth::user()->roles()->first()->name == 'user') 
                    <li><a href="{!! url('dashboard') !!}"> User Dashboard</a></li>
                   @else 
                    <li class="active"><a href="{!! url('admin') !!}"> Admin Dashboard</a></li>
                   @endif 
                </ul>
            </li>

            <li class="menu-list"><a href=""><i class="fa fa-money"></i> <span>Accounts</span></a>
                
                @if(Auth::user()->roles()->first()->name == 'admin')
                
                <ul class="sub-menu-list">
                    <li><a href="{{ url('admin/deposit') }}"> Confirm Deposit</a></li>
                    <li><a href="{{ url('admin/withdrawal') }}"> Confirm Withdrawal</a></li>
                    <li><a href="{{ url('admin/transfer') }}"> Internal Transfer</a></li>
                </ul>
                
                @elseif(Auth::user()->roles()->first()->name == 'user')

                <ul class="sub-menu-list">
                    <li><a href="{{ url('user/deposit') }}"> Make Deposit</a></li>
                    <li><a href="{{ url('user/withdrawal') }}"> Request Withdrawal</a></li>
                    <li><a href="{{ url('user/transfer') }}"> Internal Transfer</a></li>
                    <li><a href="{{ url('user/balance') }}"> Wallet Balance</a></li>
                </ul>

                @endif

            </li>
            <li class="menu-list"><a href=""><i class="fa fa-flag-checkered"></i> <span>Reports</span></a>
                @if(Auth::user()->roles()->first()->name == 'admin')

                <ul class="sub-menu-list">
                    <li><a href="general.html"> Deposit History</a></li>
                    <li><a href="buttons.html"> Withdrawal History</a></li>
                    <li><a href="tabs-accordions.html"> Transaction Details </a></li>
                    <li><a href="typography.html"> Direct Referral Commission History</a></li>
                    <li><a href="panels.html"> Step Referral Commission History</a></li>
                    <li><a href="panels.html"> Monthly Payments History</a></li>
                </ul>

                @elseif(Auth::user()->roles()->first()->name == 'user')

                    <ul class="sub-menu-list">
                        <li><a href="general.html"> Deposit History</a></li>
                        <li><a href="buttons.html"> Withdrawal History</a></li>
                        <li><a href="tabs-accordions.html"> Transaction Details </a></li>
                        <li><a href="typography.html"> Earning Details</a></li>
                        <li><a href="slider.html"> Direct Referral Commission</a></li>
                        <li><a href="panels.html"> Step Referral Commission</a></li>
                    </ul>

                @endif

            </li>
            {{-- <li class="menu-list"><a href=""><i class="fa fa-cogs"></i> <span>Components</span></a>
                <ul class="sub-menu-list">
                    <li><a href="grids.html"> Grids</a></li>
                    <li><a href="gallery.html"> Media Gallery</a></li>
                    <li><a href="calendar.html"> Calendar</a></li>
                    <li><a href="tree_view.html"> Tree View</a></li>
                    <li><a href="nestable.html"> Nestable</a></li>

                </ul>
            </li> --}}

            @if(Auth::user()->roles()->first()->name == 'admin')
                <li><a href="fontawesome.html"><i class="fa fa-group"></i> <span>Referral Tree</span></a></li>

                <li><a href="fontawesome.html"><i class="fa fa-user"></i> <span>Join a Member</span></a></li>

                <li><a href="fontawesome.html"><i class="fa fa-briefcase"></i> <span>Business Concept</span></a></li>

                <li><a href="fontawesome.html"><i class="fa fa-briefcase"></i> <span>User Permission</span></a></li>
            
            @elseif(Auth::user()->roles()->first()->name == 'user')

                <li><a href="fontawesome.html"><i class="fa fa-group"></i> <span>Referral Tree</span></a></li>

                <li><a href="fontawesome.html"><i class="fa fa-bullhorn"></i> <span>New Referral</span></a></li>

                <li><a href="{{ url('user/register')}}"><i class="fa fa-user"></i> <span>Join a Member</span></a></li>

                <li><a href="fontawesome.html"><i class="fa fa-briefcase"></i> <span>Business Concept</span></a></li>

            @endif

            {{-- <li class="menu-list"><a href=""><i class="fa fa-envelope"></i> <span>Mail</span></a>
                <ul class="sub-menu-list">
                    <li><a href="mail.html"> Inbox</a></li>
                    <li><a href="mail_compose.html"> Compose Mail</a></li>
                    <li><a href="mail_view.html"> View Mail</a></li>
                </ul>
            </li> 

            <li class="menu-list"><a href=""><i class="fa fa-tasks"></i> <span>Forms</span></a>
                <ul class="sub-menu-list">
                    <li><a href="form_layouts.html"> Form Layouts</a></li>
                    <li><a href="form_advanced_components.html"> Advanced Components</a></li>
                    <li><a href="form_wizard.html"> Form Wizards</a></li>
                    <li><a href="form_validation.html"> Form Validation</a></li>
                    <li><a href="editors.html"> Editors</a></li>
                    <li><a href="inline_editors.html"> Inline Editors</a></li>
                    <li><a href="pickers.html"> Pickers</a></li>
                    <li><a href="dropzone.html"> Dropzone</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-bar-chart-o"></i> <span>Charts</span></a>
                <ul class="sub-menu-list">
                    <li><a href="flot_chart.html"> Flot Charts</a></li>
                    <li><a href="morris.html"> Morris Charts</a></li>
                    <li><a href="chartjs.html"> Chartjs</a></li>
                    <li><a href="c3chart.html"> C3 Charts</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href="#"><i class="fa fa-th-list"></i> <span>Data Tables</span></a>
                <ul class="sub-menu-list">
                    <li><a href="basic_table.html"> Basic Table</a></li>
                    <li><a href="dynamic_table.html"> Advanced Table</a></li>
                    <li><a href="responsive_table.html"> Responsive Table</a></li>
                    <li><a href="editable_table.html"> Edit Table</a></li>
                </ul>
            </li>

            <li class="menu-list"><a href="#"><i class="fa fa-map-marker"></i> <span>Maps</span></a>
                <ul class="sub-menu-list">
                    <li><a href="google_map.html"> Google Map</a></li>
                    <li><a href="vector_map.html"> Vector Map</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href=""><i class="fa fa-file-text"></i> <span>Extra Pages</span></a>
                <ul class="sub-menu-list">
                    <li><a href="profile.html"> Profile</a></li>
                    <li><a href="invoice.html"> Invoice</a></li>
                    <li><a href="pricing_table.html"> Pricing Table</a></li>
                    <li><a href="timeline.html"> Timeline</a></li>
                    <li><a href="blog_list.html"> Blog List</a></li>
                    <li><a href="blog_details.html"> Blog Details</a></li>
                    <li><a href="directory.html"> Directory </a></li>
                    <li><a href="chat.html"> Chat </a></li>
                    <li><a href="404.html"> 404 Error</a></li>
                    <li><a href="500.html"> 500 Error</a></li>
                    <li><a href="registration.html"> Registration Page</a></li>
                    <li><a href="lock_screen.html"> Lockscreen </a></li>
                </ul>
            </li>
            <li><a href="login.html"><i class="fa fa-sign-in"></i> <span>Login Page</span></a></li>
            --}}

        </ul>
        <!--sidebar nav end-->

    </div>
</div>
<!-- left side end