<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                 <img src="{{URL::asset('img/admin/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::guard('admin')->user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">
                <a href="{{ url('admin/dashboard/index') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    
                </a>
                
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Catalog</span>
                    <span class="pull-right-container">
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/catalog/product') }}"><i class="fa fa-circle-o"></i> Products</a></li>
                    <li><a href="{{ url('admin/catalog/categories') }}"><i class="fa fa-circle-o"></i> Categories</a></li>
                    <li><a href="{{ url('admin/catalog/manufacturer') }}"><i class="fa fa-circle-o"></i> Manufacturers</a></li>
                    <li><a href="{{ url('admin/catalog/producttag') }}"><i class="fa fa-circle-o"></i> Product Tag</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Product Review</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Low Stock Report</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Bulk Edit Product</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Attribute
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Product</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Specification</a></li>
                                    <li><a href="#"><i class="fa fa-circle-o"></i> Checkout</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Sales</span>
                    <span class="pull-right-container">
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Orders</a></li>
                    <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Return Request</a></li>
                    <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Recurring Payment</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Gift Cards</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Current Wishlist</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Current Shopping Cart</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Best Sellers</a></li>
                    <li><a href="pages/layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Prdduct Never Purchased</a></li>
                    
                </ul>
            </li>
            <li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Customers</span>
                    <span class="pull-right-container">
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Customers</a></li>
                    <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Customer role</a></li>
                    <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Customer Report</a></li>                  
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>Configuration</span>
                    <span class="pull-right-container">
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/layout/top-nav.html"><i class="fa fa-circle-o"></i> Delivery Date</a></li>
                    <li><a href="pages/layout/boxed.html"><i class="fa fa-circle-o"></i> Store</a></li>
                    <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Measurement</a></li>                  
                    <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Payment Method</a></li>                  
                    <li><a href="pages/layout/fixed.html"><i class="fa fa-circle-o"></i> Payment Method Fee</a></li>                  
                </ul>
            </li>
            
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>