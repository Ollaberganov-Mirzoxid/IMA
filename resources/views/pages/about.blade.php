@extends('layouts.main')

@section('title', 'Asosiy Sahifa')

@section('content')

    <!-- Header Start-->
    <div class="header-container">
        <div class="header-container-in">
            <h4>Biz Haqimizda</h4>
        </div>
    </div>
    <!-- Header End-->

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

@endsection
