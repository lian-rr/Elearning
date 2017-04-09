<nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <div class="navbar-header">
        <a class="page-title" href="{{url('/home')}}">
            <span>Elearning</span>
        </a>
    </div>

    <div class="top-right links">
        <ul>
            @if (Auth::check())
                {{--TODO  Find a better way of doing this--}}
                <li>
                    <a href="{{url('/courses')}}">Courses</a>
                </li>
                @if(Auth::user()->role->rol == 1)
                    <li><a href="{{url('/users')}}">Users</a></li>
                @endif
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            @else
                <li><a href="{{ url('/login') }}">Login</a></li>
                <li><a href="{{ url('/register') }}">Register</a></li>
            @endif
        </ul>

    </div>
</nav>