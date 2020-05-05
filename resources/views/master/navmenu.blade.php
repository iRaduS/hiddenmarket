@auth
<nav id="navmenu" class="navbar navbar-expand navbar-light p-0 d-lg bg-white">
    <div class="container">
        
        <div class="navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav nav-fill w-100 mr-auto">
                    <li class="nav-item @isroute('home') active @endisroute">
                        <a href="{{route('home')}}" class="nav-link">
                            <span class="text-uppercase">Home</span>
                        </a>
                    </li>
                    <li class="nav-item @isroute('profile.messages') active @endisroute">
                        <a href="{{route('profile.messages')}}" class="nav-link">
                            <span class="text-uppercase">Messages</span>
                        </a>
                    </li>
                    <li class="nav-item @isroute('profile.purchases') active @endisroute">
                        <a href="{{route('profile.purchases')}}" class="nav-link">
                            <span class="text-uppercase">Purchases</span>
                        </a>
                    </li>
                    <li class="nav-item @isroute('profile.wishlist') active @endisroute">
                        <a href="{{route('profile.wishlist')}}" class="nav-link">
                            <span class="text-uppercase">Wishlist</span>
                        </a>
                    </li>
                    <li class="nav-item @isroute('profile.tickets') active @endisroute">
                        <a href="{{route('profile.tickets')}}" class="nav-link">
                            <span class="text-uppercase">Support</span>
                        </a>
                    </li>
                    <li class="nav-item @isroute('profile.index') active @endisroute">
                        <a href="{{route('profile.index')}}" class="nav-link">
                            <span class="text-uppercase">Settings</span>
                        </a>
                    </li>
                    @vendor
                        <li class="nav-item @isroute('profile.vendor') active @endisroute">
                            <a href="{{route('profile.vendor')}}" class="nav-link">
                                <span class="text-uppercase">Vendor</span>
                            </a>
                        </li>
                        <li class="nav-item @isroute('profile.sales') active @endisroute">
                            <a href="{{route('profile.sales')}}" class="nav-link">
                                @if (auth() -> user() -> vendor -> unreadSales() > 0)
                                    <span class="text-uppercase text-info">Sales ({{ auth() -> user() -> vendor -> unreadSales() }} new) </span>
                                @else
                                    <span class="text-uppercase">Sales</span>
                                @endif
                            </a>
                        </li>
                    @else
                        <li class="nav-item @isroute('profile.become') active @endisroute">
                            <a href="{{route('profile.become')}}" class="nav-link">
                                <span class="text-uppercase">Become vendor</span>
                            </a>
                        </li>
                    @endvendor
                </ul>
        </div>
    </div>
</nav>
@endauth
