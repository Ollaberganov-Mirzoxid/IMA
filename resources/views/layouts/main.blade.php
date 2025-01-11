<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default Title')</title>

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body>
    <header>
        @include('partials.header') <!-- Header qismi -->
    </header>

    <main>
        @yield('content') <!-- Sahifalarning o'zgaruvchan mazmuni -->
    </main>


    <footer class="footer">
        @include('partials.footer') <!-- Footer qismi -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        // Navbar elementini tanlash
        const navbar = document.querySelector('.navbar');

        // Sahifa scroll qilinsa, class qo'shish yoki olib tashlash
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled'); // Class qo'shish
            } else {
                navbar.classList.remove('scrolled'); // Classni olib tashlash
            }
        });


        // Har bir sonni hisoblash uchun kod
        const counters = document.querySelectorAll('.count');
        const speed = 500; // Sanash tezligi (pastroq qiymat = tezroq)

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target'); // Maqsad (masalan, 1000)
                const count = +counter.innerText; // Hozirgi qiymat

                const increment = target / speed; // O'sish miqdori

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment); // Qiymatni yangilash
                    setTimeout(updateCount, 10); // Har 10ms da yangilash
                } else {
                    counter.innerText = target; // Yakuniy qiymatni o'rnatish
                }
            };

            updateCount();
        });
    </script>
</body>

</html>
