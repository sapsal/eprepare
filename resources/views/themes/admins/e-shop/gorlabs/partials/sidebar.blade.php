<div class="sidebar sidebar-style-2" data-background-color="">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{asset('themes/admins/e-shop/gorlabs/img/profile.jpg')}}" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#administrator" aria-expanded="true">
                        <span>
                            Admin Admin
                            <span class="user-level">Administrator</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="administrator">
                        <ul class="nav">
                            <li>
                                <a href="user/profile.html">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a data-toggle="collapse" href="#dashboard" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Dashboards</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="dashboard">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="#">
                                    <span class="sub-item">Admin</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Accounting</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Production</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item active">
                    <a data-toggle="collapse" href="#owner" class="collapsed" aria-expanded="false">
                        <i class="fas fa-home"></i>
                        <p>Owner</p>
                        <span class="caret"></span>
                    </a>

                    <div class="collapse" id="owner">
                        <ul class="nav nav-collapse">
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#themes">
                                    <p>Themes</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="themes">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="themes/themes.html">
                                                <span class="sub-item">Theme List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#modules">
                                    <p>Modules</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="modules">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">Module List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#tools">
                                    <p>Tools</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="tools">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="tool/route-list.html">
                                                <span class="sub-item">Route List</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <span class="sub-item">System Settings</span>
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Administration</h4>
                </li>
                <!--Setup Start-->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#setup">
                        <i class="fas fa-layer-group"></i>
                        <p>Setup</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="setup">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="setup/general.html">
                                    <span class="sub-item">General Setting</span>
                                </a>
                            </li>
                            <li>
                                <a href="setup/meta-tags.html">
                                    <span class="sub-item">SEO Meta Tags</span>
                                </a>
                            </li>
                            <li>
                                <a href="backup/index.html">
                                    <span class="sub-item">Backups</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Black List</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--Setup End-->
                <!--Globalization Start-->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#globalization">
                        <i class="fas fa-layer-group"></i>
                        <p>Globalization</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="globalization">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="language/index.html">
                                    <span class="sub-item">Languages</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--Globalization End-->
                <!--Users Start-->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#users">
                        <i class="fas fa-th-list"></i>
                        <p>Users</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="users">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="user/index.html">
                                    <span class="sub-item">User Manager</span>
                                </a>
                            </li>
                            <li>
                                <a href="role/index.html">
                                    <span class="sub-item">Role Manager</span>
                                </a>
                            </li>
                            <li>
                                <a href="permission/index.html">
                                    <span class="sub-item">Permission Manager</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--Users End-->
                <!--Categories Start-->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#web-store">
                        <i class="fas fa-th-list"></i>
                        <p>Web Store</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="web-store">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="category/index.html">
                                    <span class="sub-item">Category Manager</span>
                                </a>
                            </li>
                            <li>
                                <a href="product/index.html">
                                    <span class="sub-item">Product Manager</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="sub-item">Reports</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--Users End-->
                <!--Pages Start-->
                <li class="nav-item">
                    <a data-toggle="collapse" href="#pages">
                        <i class="fas fa-th-list"></i>
                        <p>Pages</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="pages">
                        <ul class="nav nav-collapse">
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#forms">
                                    <p>Forms</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="forms">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="forms/forms.html">
                                                <span class="sub-item">Forms</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#charts">
                                    <p>Charts</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="charts">
                                    <ul class="nav nav-collapse">
                                        <li>
                                            <a href="charts/charts.html">
                                                <span class="sub-item">Charts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="charts/sparkline.html">
                                                <span class="sub-item">Sparkline</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#components">
                                    <p>Components</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="components">
                                    <ul class="nav nav-collapse">
                                        <li><a href="components/avatars.html"><span class="sub-item">Avatars</span></a>
                                        </li>
                                        <li><a href="components/buttons.html"><span class="sub-item">Buttons</span></a>
                                        </li>
                                        <li><a href="components/flaticons.html"><span
                                                    class="sub-item">Flat Icons</span></a></li>
                                        <li><a href="components/font-awesome-icons.html"><span class="sub-item">Font Awesome</span></a>
                                        </li>
                                        <li><a href="components/gridsystem.html"><span
                                                    class="sub-item">Grid System</span></a></li>
                                        <li><a href="components/notifications.html"><span class="sub-item">Notifications</span></a>
                                        </li>
                                        <li><a href="components/panels.html"><span
                                                    class="sub-item">Panels</span></a></li>
                                        <li><a href="components/simple-line-icons.html"><span class="sub-item">Simple Line Icons</span></a>
                                        </li>
                                        <li><a href="components/sweetalert.html"><span
                                                    class="sub-item">Sweetalert</span></a></li>
                                        <li><a href="components/typography.html"><span
                                                    class="sub-item">Typography</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#maps">
                                    <p>Maps</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="maps">
                                    <ul class="nav nav-collapse">
                                        <li><a href="maps/jqvmap.html"><span class="sub-item">JqVmap</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a data-toggle="collapse" href="#tables">
                                    <p>Tables</p>
                                    <span class="caret"></span>
                                </a>
                                <div class="collapse" id="tables">
                                    <ul class="nav nav-collapse">
                                        <li><a href="tables/datatables.html"><span
                                                    class="sub-item">Data Tables</span></a></li>
                                        <li><a href="tables/tables.html"><span class="sub-item">Tables</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                        <ul class="nav nav-collapse">
                            <li><a href="blank.html"><span class="sub-item">Blank Page</span></a></li>
                            <li><a href="compact-sidebar.html"><span class="sub-item">Compact Sidebar</span></a>
                            </li>
                            <li><a href="static-sidebar.html"><span class="sub-item">Static Sidebar</span></a></li>
                            <li><a href="icon-menu.html"><span class="sub-item">Icon Menu</span></a></li>
                            <li><a href="overlay-sidebar.html"><span class="sub-item">Overlay Sidebar</span></a>
                            </li>
                            <li><a href="sidebar-style-1.html"><span class="sub-item">Sidebar Style 1</span></a>
                            </li>
                            <li><a href="starter-template.html"><span class="sub-item">Starter Template</span></a>
                            </li>
                            <li><a href="widgets.html"><span class="sub-item">Widgets</span></a></li>
                        </ul>

                    </div>

                </li>

                <!--Pages End-->
            </ul>
        </div>
    </div>
</div>
