<aside class="menu-sidebar d-none d-lg-block" style="background-color: #191919">
            <div class="logo">
                <a href="#">
                    <img src="{{asset('admin/images//icon/logoisabel.png')}}" alt="IsabelTheLibrary" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a  style="color: #ffff"  href="{{ route ('contacts.index')}}">
                                <i class="fas fa-chart-bar" style="color: #ffff"></i>Messages</a>
                        </li>

                        <li>
                            <a style="color: #ffff" href="{{ route ('bukus.index')}}"> 
                                <i class="fa fa-book" style="color: #ffff"></i>Books</a>
                            </li>
                            <li>
                                <a  style="color: #ffff"  href="{{ route ('bukus.create')}}">
                                    <i class="fa fa-plus-square" style="color: #ffff"></i>Form</a>
                                </li>
                    </ul>
                </nav>
            </div>
        </aside>