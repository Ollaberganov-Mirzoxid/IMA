<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
crossorigin="anonymous"></script>

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
