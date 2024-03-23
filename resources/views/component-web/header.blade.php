<style>
    .header-nav-link-item {
        border-bottom: 2px solid #7ac400;
    }
</style>

<div class="container">
    <a class="navbar-brand fw-bold" href="/" style="padding: 10px 5px">VU SHOP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav me-auto">
            <li class="nav-item {{ request()->is('/') ? 'header-nav-link-item' : '' }}">
                <a class="nav-link {{ request()->is('/') ? 'active header-nav-link-active' : '' }}" aria-current="page"
                    href="/">Home</a>
            </li>
            <li class="nav-item {{ request()->is('contact') ? 'header-nav-link-item' : '' }}">
                <a class="nav-link {{ request()->is('contact') ? 'active header-nav-link-active' : '' }}"
                    href="/contact">Contact</a>
            </li>
        </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item d-flex" style="padding: 0 8px">
                <a href="" class="nav-link position-relative d-flex align-items-center border rounded-1">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <span class="ms-3">{{ count(session('cart', [])) }}</span>
                </a>
            </li>

            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('web.login') }}">Đăng Nhập</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('web.register') }}">Đăng ký</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('web.logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            Đăng xuất
                        </a>

                        <form id="logout-form" action="{{ route('web.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</div>
