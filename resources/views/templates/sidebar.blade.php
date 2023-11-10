<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('assets') }}/img/avatar3.png" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Hello, Jane</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="{{ (request()->segment('1') == '' || request()->segment('1') == '/') ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-users"></i> <span>Vendor</span>
                </a>
            </li>
            <li class="{{ request()->segment('1') == 'user' ? 'active' : '' }}"> 
                <a href="{{ url('/user') }}">
                    <i class="fa fa-user"></i> <span>User</span>
                </a>
            </li>
            <li class="{{ request()->segment('1') == 'status' ? 'active' : '' }}">
                <a href="{{ url('/status') }}">
                    <i class="fa fa-file-text"></i> <span>Status</span>
                </a>
            </li>
            <li class="{{ request()->segment('1') == 'order' ? 'active' : '' }}">
                <a href="{{ url('/order') }}">
                    <i class="fa fa-tags"></i> <span>Order</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart-o"></i>
                    <span>Charts</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../charts/morris.html"><i class="fa fa-angle-double-right"></i> Morris</a></li>
                    <li><a href="../charts/flot.html"><i class="fa fa-angle-double-right"></i> Flot</a></li>
                    <li><a href="../charts/inline.html"><i class="fa fa-angle-double-right"></i> Inline charts</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>