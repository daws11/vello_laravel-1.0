<header class="header" data-header>
    <div class="container">
        <div class="overlay" data-overlay></div>
        <a href="{{ route('home') }}">
            <img class="logo" src="{{ asset('assets/images/logo png.png') }}" width="120" height="120">
        </a>
        <nav class="navbar" data-navbar>
            <div class="navbar-top">
                <a href="#" class="logo"> <img class="logo" src="{{ asset('assets/images/logo png.png') }}" width="120" height="120"></a>
                <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
                    <ion-icon name="close-outline"></ion-icon>
                </button>
            </div>
            <ul class="navbar-list">
                <li class="navbar-item">
                    <a href="{{ route('kebijakan-privasi') }}" class="navbar-link" data-navbar-link>Kebijakan dan Privasi</a>
                </li>

                <li class="navbar-item">
                    <a href="{{ route('blog.show', 'tentang-kami') }}" class="navbar-link" data-navbar-link>Tentang Kami</a>
                </li>
                
                <li class="navbar-item">
                    <a ><button class="btn">Login</button></a>
                </li>
            </ul>
        </nav>
        <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
        </button>
    </div>
</header>
