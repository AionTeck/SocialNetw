<div class="d-flex flex-column flex-shrink-0 p-3 text-bg-dark" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32">
            <use xlink:href="#bootstrap"></use>
        </svg>
        <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('home.index') }}" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#"></use>
                </svg>
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('news.index') }}" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#"></use>
                </svg>
                News
            </a>
        </li>
        <li>
            <a href="{{ route('messages.index') }}" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#table"></use>
                </svg>
                Messages
            </a>
        </li>
        <li>
            <a href="{{ route('friends.index') }}" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#grid"></use>
                </svg>
                Friends
            </a>
        </li>
        <li>
            <a href="{{ route('communities.index') }}" class="nav-link text-white">
                <svg class="bi pe-none me-2" width="16" height="16">
                    <use xlink:href="#people-circle"></use>
                </svg>
                Communities
            </a>
        </li>
        <a class="btn btn btn-outline-danger btn-sm" href="{{ route('logout') }}" role="button">Logout</a>
    </ul>
</div>
