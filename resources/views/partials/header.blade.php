<nav class="navbar">
    <div class="logo">
        <a href="">
            <h1 class="text-primary"><img src="/assets/img/logo.png" alt="IMA Logo"> IAY</h1>
        </a>
    </div>
    <div class="links">
        <ul class="nav-links">
            <li class="{{ request()->routeIs('/') ? 'active' : '' }}">
                <a class="{{ request()->routeIs('/') ? 'active' : '' }}" href="{{ route('/') }}">Asosiy</a>
            </li>
            <li class="{{ request()->routeIs('about') ? 'active' : '' }}">
                <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">Biz
                    Haqimizda</a>
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
                    <a href="#" id="openModal"><i class="fas fa-newspaper"></i> Maqola yuklash</a>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button><i class="fas fa-sign-out-alt"></i> Chiqish</button>
                    </form>
                </div>
            </div>

            <div class="modal" id="myModal">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3>Maqola Yuklash</h3>
                        <span class="close" id="closeModal">&times;</span>
                    </div>
                    <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <label for="title">Sarlavha (Title):</label>
                        <input type="text" id="title" name="title" placeholder="Sarlavha kiriting" required>
            
                        <label for="file">Fayl (File):</label>
                        <input type="file" id="file" name="file_path" required>
            
                        <label for="category">Kategoriya (Category):</label>
                        <select id="category" name="category" required>
                            <option value="Technology">Texnologiya</option>
                            <option value="Business">Biznes</option>
                            <option value="Cyber">Kiberxavfsizlik</option>
                            <option value="Sport">Sport</option>
                        </select>
            
                        <button type="submit">Yuklash</button>
                    </form>
                </div>
            </div>

            <script>
                const modal = document.getElementById("myModal");
                const openModal = document.getElementById("openModal");
                const closeModal = document.getElementById("closeModal");
            
                // Modalni ochish
                openModal.addEventListener("click", () => {
                    modal.style.display = "flex";
                });
            
                // Modalni yopish
                closeModal.addEventListener("click", () => {
                    modal.style.display = "none";
                });
            
                // Fondan bosib yopish
                window.addEventListener("click", (e) => {
                    if (e.target === modal) {
                        modal.style.display = "none";
                    }
                });
            </script>

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
