<nav class="navbar">
    <div class="logo">
        <a href="">
            <h1 class="text-primary"><img src="assets/img/logo.png" alt="IMA Logo"> IMA</h1>
        </a>
    </div>
    <div class="links">
        <ul class="nav-links">
            <li class="{{ request()->routeIs('/') ? 'active' : '' }}">
                <a class="{{ request()->routeIs('/') ? 'active' : '' }}" 
                    href="{{ route('/') }}">Asosiy</a>
            </li>
            <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" 
                    href="{{ route('about') }}">Biz Haqimizda</a>
            </li>
            <li class="{{ request()->routeIs('articles') ? 'active' : '' }}">
                <a class="{{ request()->routeIs('articles') ? 'active' : '' }}" 
                    href="{{ route('articles') }}">Maqolalar</a>
            </li>
            <li class="{{ request()->routeIs('conferences') ? 'active' : '' }}">
                <a class="{{ request()->routeIs('conferences') ? 'active' : '' }}"
                    href="{{ route('conferences') }}">Anjumanlar</a>
            </li>
        </ul>
    </div>
    <div class="extra">
        <div class="search" id="search">
            <i class="fas fa-search" id="search-icon"></i>
            <input type="text" id="search-input" placeholder="Qidiruv...">
        </div>
        <div class="login">
            <a href="{{ route('login') }}" class="login-btn">login</a>
        </div>
    </div>
</nav>
