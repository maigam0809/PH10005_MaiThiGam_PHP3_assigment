<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Tìm kiếm...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="{{ route('/') }}"><i class="fa fa-dashboard fa-fw"></i> Trang chủ</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-dashboard fa-fw"></i> Thống kê</a>
            </li>
            {{-- Categories --}}
            <li>
                <a href="{{ route('admin.categories.index') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Categories<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.categories.index') }}">List Categories</a>
                    </li>
                    <li>

                        <a href="{{ route('admin.categories.create') }}">Add Categories</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
             {{-- Products --}}
             <li>
                <a href="{{ route('admin.products.index') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Products<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.products.index') }}">List Products</a>
                    </li>
                    <li>

                        <a href="{{ route('admin.products.create') }}">Add Products</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
              {{-- Invoices --}}
             <li>
                <a href="{{ route('admin.invoices.index') }}"><i class="fa fa-bar-chart-o fa-fw"></i> Invoices<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.invoices.index') }}">List invoices</a>
                    </li>

                </ul>
                <!-- /.nav-second-level -->
            </li>
              {{-- News --}}
             <li>
                <a href="{{ route('admin.news.index') }}"><i class="fa fa-bar-chart-o fa-fw"></i> News<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.news.index') }}">List News</a>
                    </li>
                    <li>
                        <a href="{{ route('admin.news.create') }}">Add News</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
              {{-- Contacts --}}
              <li>
                <a href="{{ route('admin.contacts.index') }}"><i class="fa fa-bar-chart-o fa-fw"></i> contacts<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.contacts.index') }}">List contacts</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            {{-- Users --}}
            <li>
                <a href="{{route('admin.users.index')}}"><i class="fa fa-users fa-fw"></i>Users<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{route('admin.users.index')}}">List Users</a>
                    </li>
                    <li>
                        <a href="{{route('admin.users.create')}}">Add Users</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
