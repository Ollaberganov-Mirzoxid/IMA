@extends('layouts.main')

@section('title', 'Asosiy Sahifa')

@section('content')
    <!-- Corousel Start -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="gradient-overlay">
                    <img src="assets/img/carousel-1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption c-c-right d-none d-md-block">
                    <h4>Ilmiy tadbirlar va yig‘ilishlar</h4>
                    <h1>"Ilm-Fan va yangi g‘oyalar uchun ochiq platforma</h1>
                    <p>Ilm-fan va madaniyat sohasidagi eng muhim anjumanlar haqida ma'lumot oling! Tadbirlarimizda
                        qatnashish orqali yangi bilimlar oling, ilmiy muhokamalarda ishtirok eting va o‘z
                        fikrlaringizni bildiring.</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="gradient-overlay">
                    <img src="assets/img/carousel-2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-caption c-c-left d-none d-md-block">
                    <h4>Foydalanuvchi maqolalari</h4>
                    <h1>Maqolalaringizni biz bilan bo'lishing!</h1>
                    <p> Platformamizda har bir foydalanuvchi o‘z maqolalarini yuklashi va boshqa foydalanuvchilar bilan
                        fikr almashishi mumkin. O‘z bilim va tajribalaringizni biz bilan bo‘lishing!</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon next" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Corousel End -->

    <!-- Feature Start -->
    <div class="container-features">
        <div class="container-feature-in">
            <div class="container-features-in-title">
                <h4>Bizning xususiyatlar</h4>
                <h1>O‘qish Va Tadqiqotlar Uchun Isbotlangan Resurs</h1>
            </div>
            <div class="container-features-in-card">
                <div class="container-feature">
                    <div class="container-feature-icon">
                        <i class="fas fa-globe fa-3x"></i> <!-- Global miqyos -->
                    </div>
                    <div class="container-feature-text">
                        <h4>Maqolalarni Tarqatish</h4>
                        <span>Bizning platformamiz orqali o‘z ilmiy maqolangizni global
                            miqyosda chop eting va keng auditoriyaga taqdim qiling.</span>
                    </div>
                </div>
                <div class="container-feature">
                    <div class="container-feature-icon">
                        <i class="fas fa-microscope fa-3x"></i> <!-- Mikroskop -->
                    </div>
                    <div class="container-feature-text">
                        <h4>Innovatsion Tadqiqotlar</h4>
                        <span>Eng yangi tadqiqot natijalarini o‘rganing, ulardan foydalaning
                            va ilmiy jamiyatni rivojlantirishga hissa qo‘shing.</span>
                    </div>
                </div>
                <div class="container-feature">
                    <div class="container-feature-icon">
                        <i class="fas fa-chart-line fa-3x"></i>
                    </div>
                    <div class="container-feature-text">
                        <h4>Foydalanuvchi Tajribasi</h4>
                        <span>Platformamiz sizga o‘z ilmiy tajribangiz va bilimlaringizni keng
                            auditoriyaga yetkazish imkonini beradi.</span>
                    </div>
                </div>
                <div class="container-feature">
                    <div class="container-feature-icon">
                        <i class="fas fa-search fa-3x"></i> <!-- Kattalashtiruvchi oynak -->
                    </div>
                    <div class="container-feature-text">
                        <h4>Asoslangan Maqolalar</h4>
                        <span>Bizning platformamizda chop etilgan barcha maqolalar yuqori sifat
                            standartlariga muvofiq holda tekshiriladi va tasdiqlanadi.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- About Us Start -->
    <div class="container-features about">
        <div class="container-feature-in about-in">
            <div class="container-about-in-left">
                <div class="container-about-in-left-img">
                    <img src="assets/img/about.webp" alt="">
                    <div class="container-about-in-left-img-title">
                        <span>Bilimlarni Birlashtiramiz</span>
                    </div>
                </div>
            </div>
            <div class="container-about-in-right">
                <div class="container-about-in-right-text">
                    <div class="text-title">
                        <h4>Biz Haqimizda</h4>
                        <h1>Ilmga yo'naltirilgan platforma</h1>
                        <p>Bizning maqsadimiz – ilm-fan sohasidagi eng yaxshi materiallarni
                            taqdim etib, tadqiqotchilar va o'quvchilarni birlashtirish.
                            Bilim almashinuvi va rivojlanish uchun imkoniyat yaratuvchi muhitni
                            yaratamiz.</p>
                    </div>
                    <div class="container-about-in-right-text-card">
                        <div class="card-icon">
                            <i class="fas fa-lightbulb fa-3x"></i>
                        </div>
                        <div class="card-title">
                            <h3>Ilmiy yutuqlaringizni qo'llab quvatlaymiz</h3>
                            <p>IMA platformasi sizning ilmiy ishlanmangizni keng
                                auditoriyaga taqdim etishda ishonchli ko‘makchi bo‘ladi.
                                Ilm-fan rivojlanishiga birgalikda hissa qo‘shamiz</p>
                        </div>
                    </div>
                    <div class="container-about-in-right-text-card">
                        <div class="card-icon">
                            <i class="fas fa-book fa-3x"></i>
                        </div>
                        <div class="card-title">
                            <h3>Ilmiy asoslangan nashrlar</h3>
                            <p>IMA Platformasida taqdim etilgan barcha maqolalar xalqaro
                                standartlarga mos keladi va ilmiy hamjamiyatning barcha
                                talablariga javob beradi.</p>
                        </div>
                    </div>
                    <a href="about.html">Batafsil</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us End -->

    <!-- statistics Start -->
    <div class="container-all-statistics">
        <div class="container-statistics">
            <div class="container-statistics-in">
                <div class="container-statistic-in-icon">
                    <i class="fas fa-users fa-3x"></i>
                </div>
                <div class="container-statistic-in-text">
                    <h4>Foydalanuvchilar</h4>
                    <span class="count" data-target="1000">0</span>
                </div>
            </div>
            <div class="container-statistics-in">
                <div class="container-statistic-in-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="container-statistic-in-text">
                    <h4>Umumiy Maqolalar</h4>
                    <span class="count" data-target="333">0</span>
                </div>
            </div>
            <div class="container-statistics-in">
                <div class="container-statistic-in-icon">
                    <i class="fas fa-check"></i>
                </div>
                <div class="container-statistic-in-text">
                    <h4>Tasdiqlangan Maqolalar</h4>
                    <span class="count" data-target="222">0</span>
                </div>
            </div>
            <div class="container-statistics-in">
                <div class="container-statistic-in-icon">
                    <i class="fas fa-times"></i>
                </div>
                <div class="container-statistic-in-text">
                    <h4>Rad etilgan Maqolalar</h4>
                    <span class="count" data-target="111">0</span>
                </div>
            </div>
        </div>
    </div>
    <!--Statistics End -->

    <!--Latest Articles Start-->
    <div class="latest-conferences">
        <div class="latest-conferences-in">
            <div class="latest-conferences-title">
                <h4>Maqolalar</h4>
                <h1>Eng so'ngi Maqolalar</h1>
            </div>
            <div class="latest-conferences-content">
                @foreach ($latestArticles as $article)
                    <div class="latest-conference">
                        <div class="latest-article-in">
                            <div class="latest-article-img">
                                <img src="{{ asset('assets/images/' . strtolower($article->category) . '.jpg') }}"
                                    alt="">
                            </div>
                            <div class="latest-article-texts">
                                <div class="article-title">
                                    <h4>{{ $article->title }}</h4>
                                </div>
                                <div class="buttons">
                                    <a class="view" href="{{ asset('storage/' . $article->file_path) }}"  target="_blank">
                                        <i class="fas fa-eye"></i> Ko'rish</a>
                                    <a class="download" href="{{ asset('storage/' . $article->file_path) }}" download>
                                        <i class="fas fa-download"></i> Yuklab olish
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--Latest Articles End-->

    <!--Latest Conferences Start-->
    <div class="latest-conferences">
        <div class="latest-conferences-in">
            <div class="latest-conferences-title">
                <h4>Anjumanlar</h4>
                <h1>Eng so'ngi Anjumanlar</h1>
            </div>
            <div class="latest-conferences-content">
                @foreach ($latestConference as $conference)
                    <div class="latest-conference">
                        <div class="latest-conference-in">
                            <div class="latest-conference-img">
                                <img src="assets/img/carousel-1.jpg" alt="">
                                <div class="latest-conference-add-data">
                                    <i class="fas fa-calendar-alt"></i>
                                    {{ $conference->created_at->format('M d Y') }}
                                </div>
                            </div>
                            <div class="latest-conference-texts">
                                <a class="h4"
                                    href="{{ route('conferences.show', ['conference' => $conference->id]) }}">{{ $conference->title }}</a>
                                <p>{{ $conference->description1 }}</p>
                                <a class="read-more"
                                    href="{{ route('conferences.show', ['conference' => $conference->id]) }}">Batafsil <i
                                        class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--Latest Conferences End-->

@endsection
