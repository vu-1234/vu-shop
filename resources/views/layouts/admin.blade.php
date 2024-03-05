<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Vu Shop Panel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        /* Sidebar styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
        }

        .sidebar ul.nav flex-column {
            padding-left: 0;
        }

        .sidebar ul.nav.flex-column li.nav-item {
            margin-bottom: 10px;
        }

        .sidebar ul.nav.flex-column li.nav-item a.nav-link {
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .sidebar ul.nav.flex-column li.nav-item a.nav-link:hover {
            background-color: #495057;
        }

        .sidebar ul.nav.flex-column li.nav-item a.nav-link.active {
            border-left: 4px solid #3b25e6;
            background: #495057 !important;
        }

        /* Main content styles */
        .main-content {
            margin-left: 250px;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div id="app">
        <div class="sidebar">
            <div class="container-fluid mt-5 mb-5">
                <a class="nav-link" href="{{ route('admin.home') }}">
                    <h4 class="text-white">Admin Vu Shop</h4>
                </a>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ strpos(url()->current(), 'admin/user') !== false ? 'active' : '' }}"
                        href="{{ route('admin.user.index') }}"><i class="fa-solid fa-users me-2"></i>Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ strpos(url()->current(), 'admin/admin') !== false ? 'active' : '' }}"
                        href="{{ route('admin.admin.index') }}"><i class="fa-solid fa-user-nurse me-2"></i>Admins</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ strpos(url()->current(), 'admin/banner') !== false ? 'active' : '' }}"
                        href="{{ route('admin.banner.index') }}"><i class="fa-brands fa-adversal me-2"></i>Banners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ strpos(url()->current(), 'admin/category') !== false ? 'active' : '' }}"
                        href="{{ route('admin.category.index') }}"><i
                            class="fa-solid fa-layer-group me-2"></i>Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ strpos(url()->current(), 'admin/product') !== false ? 'active' : '' }}"
                        href="{{ route('admin.product.index') }}"><i class="fa-solid fa-list me-2"></i>Products</a>
                </li>
                {{-- <li class="nav-item">
                <a class="nav-link {{ strpos(url()->current(), 'admin/order') !== false ? 'active' : '' }}" href="{{ route('admin.order.index') }}"><i class="fa-solid fa-inbox me-2"></i>Orders</a>
            </li> --}}
            </ul>
        </div>

        <div class="main-content">
            <div class="d-flex justify-content-end">
                <ul class="navbar-nav">
                    <!-- Authentication Links -->
                    <li class="nav-item dropdown">
                        <div class="dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href=""
                                        onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit()">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="mt-2">
                @yield('content')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
