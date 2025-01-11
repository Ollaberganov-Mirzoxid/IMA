<nav class="navbar">
    <div class="logo">
        <a href="">
            <h1 class="text-primary"><img src="/assets/img/logo.png" alt="IMA Logo"> IAY</h1>
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
            <li class="{{ request()->routeIs('articles.index') ? 'active' : '' }}">
                <a class="{{ request()->routeIs('articles.index') ? 'active' : '' }}"
                    href="{{ route('articles.index') }}">Maqolalar</a>
            </li>
            <li class="{{ request()->routeIs('conferences.index') ? 'active' : '' }}">
                <a class="{{ request()->routeIs('conferences.index') ? 'active' : '' }}"
                    href="{{ route('conferences.index') }}">Anjumanlar</a>
            </li>
        </ul>
    </div>
    <div class="search-main">
        <div class="search" id="search">
            <i class="fas fa-search" id="search-icon"></i>
            <input type="text" id="search-input" placeholder="Qidiruv...">
        </div>
    </div>
    <div class="extra">
        @auth
            <div class="auth">
                <div class="profile-header" onclick="toggleDropdown()">
                    <img src="">
                    <h3 class="profile-name">{{ Auth::user()->name }}</h3><i class="fas fa-user-circle"></i>
                </div>
                <div class="dropdown-content" id="dropdownMenu">
                    <a href="#"><i class="fas fa-envelope"></i> Xabarlar</a>
                    <a href="{{ route('profile.edit') }}"><i class="fas fa-pen"></i> Tahrirlash</a>
                    {{-- <a href="{{ route('create_articles') }}"><i class="fas fa-plus"></i> Maqola Qo'shish</a> --}}
                    <a href="#"><i class="fas fa-newspaper"></i> Mening Maqolalarim</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button><i class="fas fa-sign-out-alt"></i> Chiqish</button>
                    </form>
                </div>
            </div>

            <script>
                function toggleDropdown() {
                    var menu = document.getElementById("dropdownMenu");
                    if (menu.style.display === "none" || menu.style.display === "") {
                        menu.style.display = "block";
                    } else {
                        menu.style.display = "none";
                    }
                }

                // Tashqarida bosilganda menyuni yopish
                window.addEventListener("click", function(event) {
                    var menu = document.getElementById("dropdownMenu");
                    var profileHeader = document.querySelector(".profile-header");
                    if (menu.style.display === "block" && !profileHeader.contains(event.target)) {
                        menu.style.display = "none";
                    }
                });
            </script>
        @else
            <div class="login">
                <a href="{{ route('login') }}" class="login-btn">Kirish</a>
            </div>
        @endauth
    </div>
</nav>
