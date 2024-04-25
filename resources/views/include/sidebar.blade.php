<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header position-relative">
            <div class="d-flex justify-content-between align-items-center">
                <div class="logo">
                    <a href="index.html">
                        <img src="{{ asset('image/logo.png') }}" alt="Logo" style="max-width: 100%; height: auto;">
                    </a>
                </div>

                <div class="sidebar-toggler x">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item {{ Route::is('dashboard.index') ? 'active' : '' }}">
                    <a href="{{ route('dashboard.index') }}" class='sidebar-link'>
                        <i class="bi bi-bar-chart"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Route::is('food.index') ? 'active' : '' }}">
                    <a href="{{ route('food.index') }}" class='sidebar-link'>
                        <i class="fa-solid fa-bowl-food"></i>
                        <span>Food</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Route::is('drink.index') ? 'active' : '' }}">
                    <a href="{{ route('drink.index') }}" class='sidebar-link'>
                        <i class="fa-solid fa-mug-hot"></i>
                        <span>Drink</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Route::is('dimsum.index') ? 'active' : '' }}">
                    <a href="{{ route('dimsum.index') }}" class='sidebar-link'>
                        <i class="bi bi-egg-fried"></i>
                        <span>Dimsum</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Route::is('level.index') ? 'active' : '' }}">
                    <a href="{{ route('level.index') }}" class='sidebar-link'>
                        <i class="fas fa-level-up-alt"></i>
                        <span>Level</span>
                    </a>
                </li>

                <li class="sidebar-title">Pages</li>

                <li class="sidebar-item {{ Route::is('checkout.index') ? 'active' : '' }}">
                    <a href="{{ route('checkout.index') }}" class='sidebar-link'>
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Feedback Page</span>
                    </a>
                </li>

                {{-- <li class="sidebar-item {{ Route::is('emailUser.index') ? 'active' : '' }}">
                    <a href="{{ route('emailUser.index') }}" class='sidebar-link'>
                        <i class="bi bi-envelope-fill"></i>
                        <span>Email Application</span>
                    </a>
                </li>

                <li class="sidebar-item {{ Route::is('catatanUser.index') ? 'active' : '' }}">
                    <a href="{{ route('catatanUser.index') }}" class='sidebar-link'>
                        <i class="bi bi-chat-dots-fill"></i>
                        <span>Chat Application</span>
                    </a>
                </li> --}}

                {{-- <li class="sidebar-item">
                    <a href="application-gallery.html" class='sidebar-link'>
                        <i class="bi bi-image-fill"></i>
                        <span>Photo Gallery</span>
                    </a>
                </li> --}}


            <li class="sidebar-item">
                @auth
                    <form action="{{ route('logout') }}" method="get">
                        @csrf
                        <!-- Menggunakan kelas "fas" untuk ikon Font Awesome -->
                        <button type="submit" class="btn btn-danger">
                            <i class="fas fa-sign-out-alt"></i> Logout
                        </button>
                    </form>
                @endauth
            </li>
            </ul>

            @yield('sidebar')
        </div>
    </div>
</div>
