@extends('layouts.main')

@section('title', 'Asosiy Sahifa')

@section('content')

    <!-- Header Start-->
    <div class="header-container">
        <div class="header-container-in">
            <h4>Maqolalar</h4>
        </div>
    </div>
    <!-- Header End-->

    <!--Latest Articles Start-->
    <div class="latest-conferences">
        <div class="latest-conferences-in">
            <div class="latest-conferences-title">
                <h4>Maqolalar</h4>
                <h1>Barcha Maqolalar</h1>
            </div>
            <div class="latest-conferences-content">

                @foreach ($articles as $article)
                    <div class="latest-conference">
                        <div class="latest-article-in">
                            <div class="latest-article-img">
                                <img src="{{ asset('assets/images/' . strtolower($article->category) . '.jpg') }}" alt="">
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
        <!--Latest Articles End-->

    @endsection
