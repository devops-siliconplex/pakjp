<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <ul class="side-menu metismenu">
            <li>
                <a href="/articles"><i class="sidebar-item-icon ti-comments-smiley"></i>
                    <span class="nav-label">Articles</span>
                </a>
            </li>
            <li>
                <a href="/article_tracking"><i class="sidebar-item-icon ti-comments-smiley"></i>
                    <span class="nav-label">Articles Tracking</span>
                </a>
            </li>
            <li class="heading">Options</li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><i class="sidebar-item-icon ti-power-off"></i>
                    <span class="nav-label">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

                   
            </li>
        </ul>
        {{-- <div class="sidebar-footer">
            <a href="javascript:;"><i class="ti-announcement"></i></a>
            <a href="calendar.html"><i class="ti-calendar"></i></a>
            <a href="javascript:;"><i class="ti-comments"></i></a>
            <a href="login.html"><i class="ti-power-off"></i></a>
        </div> --}}
    </div>
</nav>