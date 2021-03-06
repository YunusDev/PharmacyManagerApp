<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img height="80" width="80" src="/AdminProfilePic/{{auth('admin')->user()->photo ? auth('admin')->user()->photo->path : "seun1.jpg"}}"  class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p style="margin-left: 15px">  {{ucfirst(auth('admin')->user()->name)}}</p>
                <a href="#"><i style="margin-left: 15px" class="fa fa-circle text-success"></i> Online</a>

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
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview">

                    <li><a href="{{route('admins.index')}}"><i class="glyphicon glyphicon-user"></i>Admins</a></li>
                    {{--<li><a href=""><i class="glyphicon glyphicon-user"></i>Users</a></li>--}}
                    <li><a href="{{route('product.index')}}"><i class="glyphicon glyphicon-ruble"></i>Product</a></li>
                    {{--<li><a href="{{route('add_product.index')}}"><i class="glyphicon glyphicon-fire"></i>Add Product</a></li>--}}
                    {{--<li><a href="{{route('batch.index')}}"><i class="glyphicon glyphicon-fire"></i>Batch</a></li>--}}
                    <li><a href="{{route('invoice.index')}}"><i class="glyphicon glyphicon-fire"></i>Invoice</a></li>
                    <li><a href="{{route('receipt.index')}}"><i class="fa  fa-money"></i>Sales</a></li>
{{--                    <li><a href="{{route('sale.index')}}"><i class="glyphicon glyphicon-fire"></i>Sales</a></li>--}}
                    <li><a href="{{route('purchase.index')}}"><i class="fa fa-sellsy"></i> Purchases</a></li>
                    <li>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-fire"></i>
                            <span>Supplier</span>
                            <span class="pull-right-container">
                                                <i class="fa fa-angle-left pull-right"></i>
                                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <a href="{{route('supplier.index')}}"><i class="glyphicon glyphicon-star-empty"></i>Request</a>
                            <li><a href="{{route('receive.index')}}"><i class="glyphicon glyphicon-star-empty"></i>Receive</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('client.index')}}"><i class="fa  fa-users"></i>Client</a></li>
                    <li><a href="{{route('request.index')}}"><i class="glyphicon glyphicon-fire"></i>Supply Management</a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="glyphicon glyphicon-lock"></i>
                            <span>Accessibility</span>
                            <span class="pull-right-container">
                                        <i class="fa fa-angle-left pull-right"></i>
                                    </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('role.index')}}"><i class="glyphicon glyphicon-star-empty"></i>Role</a></li>
                            <li><a href="{{route('permission.index')}}"><i class="glyphicon glyphicon-star-empty"></i>Permission</a></li>
                        </ul>
                    </li>

                    <li><a href="{{route('contact.index')}}"><i class="glyphicon glyphicon-envelope"></i>Contact</a></li>


            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>                                                                                                                                                                                                            