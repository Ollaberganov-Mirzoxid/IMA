@extends('layouts.main')

@section('title', 'Asosiy Sahifa')

@section('content')

    <!-- Header Start-->
    <div class="header-container">
        <div class="header-container-in">
            <h4>Anjumanlar</h4>
        </div>
    </div>
    <!-- Header End-->

    <!--Latest Conferences Start-->
    <div class="latest-conferences">
        <div class="latest-conferences-in">
            <div class="latest-conferences-title">
                <h4>Anjumanlar</h4>
                <h1>Barcha Anjumanlar</h1>
            </div>
            <div class="latest-conferences-content">

                @foreach ($conferences as $conference)
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
                                <a class="h4" href="{{ route('conferences.show', ['conference' => $conference->id]) }}">{{ $conference->title }}</a>
                                <p>{{ $conference->description1 }}</p>
                                <a class="read-more" href="{{ route('conferences.show', ['conference' => $conference->id]) }}">Batafsil <i class="fas fa-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--Latest Conferences End-->

@endsection
