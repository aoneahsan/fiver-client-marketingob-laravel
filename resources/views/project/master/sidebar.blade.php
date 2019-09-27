<section class="sidebar">
    <ul class="sidebar-menu">
        <li class="header">SideBar</li>
        <li>
            <a href="{{ url('/') }}">
                <i class="ion ion-ios-people"></i>
                <span>Dashboard</span>
            </a>
        </li>
        @if(Auth::user()->roles[0]->id == 1)
        <li class="header">User Role Management</li>
        <li>
            <a href="{{ url('/check-role') }}">
                <i class="ion ion-ios-people"></i>
                <span>Check Role</span>
            </a>
        </li>
        @endif
        <li class="header">User Management</li>
        <li class="treeview">
            <a href="#">
                <i class="ion ion-ios-people"></i>
                <span>Users</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('admin/users') }}"><i class="fa fa-circle-o"></i> All Users</a></li>
                <li><a href="{{ url('admin/users/admins') }}"><i class="fa fa-circle-o"></i> Admin Users</a></li>
                <!-- <li><a href="{{ url('admin/users/buyers') }}"><i class="fa fa-circle-o"></i> Buyer Users</a></li>
                <li><a href="{{ url('admin/users/sellers') }}"><i class="fa fa-circle-o"></i> Seller Users</a></li> -->
                <li><a href="{{ url('admin/users/banned') }}"><i class="fa fa-circle-o"></i> Banned Users</a></li>
                <li><a href="{{ url('admin/users/create') }}"><i class="fa fa-circle-o"></i> Add New User</a></li>
            </ul>
        </li>
        <!-- Products -->
        <li class="header">Product Management</li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-globe"></i>
                <span>Products</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('admin/product') }}"><i class="fa fa-circle-o"></i>All Products</a></li>
                <li><a href="{{ url('admin/feature-products') }}"><i class="fa fa-circle-o"></i>All Featured Products</a></li>
                <li><a href="{{ url('admin/sale-products') }}"><i class="fa fa-circle-o"></i>All Products on Sale</a></li>
                <li>
                    <a href="{{ url('admin/product/create') }}"><i class="fa fa-circle-o"></i>Add New Product</a>
                </li>
            </ul>
        </li>

        <!-- Products Categories -->
        <li class="header">Product Categories Management</li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-globe"></i>
                <span>Products Categories</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('admin/product-category') }}"><i class="fa fa-circle-o"></i>All Products Categories</a></li>
                <li>
                    <a href="{{ url('admin/product-category/create') }}"><i class="fa fa-circle-o"></i>Add New Product Category</a>
                </li>
            </ul>
        </li>

        <!-- Products Categories -->
        <li class="header">Services Management</li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-globe"></i>
                <span>Services</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('admin/service') }}"><i class="fa fa-circle-o"></i>All Services</a></li>
                <li>
                    <a href="{{ url('admin/service/create') }}"><i class="fa fa-circle-o"></i>Add New Service</a>
                </li>
            </ul>
        </li>

        <!-- Products Categories -->
        <li class="header">Deals Management</li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-globe"></i>
                <span>Deals</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a href="{{ url('admin/deal') }}"><i class="fa fa-circle-o"></i>All Deals</a></li>
                <li>
                    <a href="{{ url('admin/deal/create') }}"><i class="fa fa-circle-o"></i>Add New Deal</a>
                </li>
            </ul>
        </li>
    </ul>
</section>