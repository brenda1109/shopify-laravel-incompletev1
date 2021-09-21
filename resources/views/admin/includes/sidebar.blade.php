<ul class="metismenu" id="menu">
                    <li>
                        <a class="has-arrow" href="javascript:void();">
                            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                            <div class="menu-title">Your Products</div>
                        </a>

                        <ul class="">
                            <li>
                                <a href="{{ route('admin_blade_view') }}"><i class='zmdi zmdi-dot-circle-alt'></i>View All</a>
                                <a href="{{ route('admin_blade_create') }}"><i class='zmdi zmdi-dot-circle-alt'></i>Create new product</a>
                        </ul>
                        

                    <li>
                        <a class="has-arrow" href="javascript:void();">
                            <div class="parent-icon"><i class="zmdi zmdi-layers"></i></div>
                            <div class="menu-title">Order Details</div>
                        </a>

                    <li>
                        <a class="has-arrow" href="javascript:void();">
                            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                            <div class="menu-title">User Management</div>
                            
                        </a>
                        <ul class="">
                            <li>
                                <a href="{{ route('admin_user_index') }}"><i class='zmdi zmdi-dot-circle-alt'></i>View All Users</a>
                        </ul>
                        


                    <li class="menu-label"></li>
                    <li>
                        <a href="javascript:void();">
                            <div class="parent-icon"><i class="zmdi zmdi-coffee"></i></div>
                            <div class="menu-title">Account</div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void();">
                            <div class="parent-icon"><i class="zmdi zmdi-chart-donut"></i></div>
                            <div class="menu-title">Setting</div>
                        </a>
                    </li>

                    <li>
                        <a  href="{{ route('logout') }}"
                            onclick="event.preventDefault(); confirm('Are you sure?') && document.getElementById('logout-form').submit();">
                            <div class="parent-icon"><i class="fa fa-sign-out"></i></div>
                            <div class="menu-title">Logout</div>
                        </a>
                    </li>
                    
                </ul>