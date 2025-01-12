@extends('layouts.main')

@section('title', 'Asosiy Sahifa')

@section('content')

    <!-- Header Start-->
    <div class="header-container">
        <div class="header-container-in">
            <h4>{{ $conference->id }}-Anjuman</h4>
        </div>
    </div>
    <!-- Header End-->

    <!--Latest Conferences Start-->
    <div class="latest-conferences">
        <div class="latest-conferences-in">

            <div class="latest-conferences-content" style="justify-content: center; width:100%;">
                <div class="top-conference" style="width: 20%">
                    <div class="top-conference-head">
                        <h5>So'nggi Anjumanlar</h4>
                    </div>
                    <div class="top-conference-in">
                        <div class="latest-conf-date">
                            <i class="fas fa-calendar-alt"></i>
                            {{ $conference->created_at->format('h:i') }} /
                            <span>{{ $conference->created_at->format('M d Y') }}</span>
                        </div>
                        <div class="latest-conference-texts">
                            <a style="font-size: 18px;" class="h4"
                                href="{{ route('conferences.show', ['conference' => $conference->id]) }}">{{ $conference->title }}
                                aaaaaaaaaaaa aaaaaaaaaaaaaaaaa</a>
                        </div>
                    </div>
                    <div class="top-conference-in" style="background:#F2F9F9; margin-bottom:20px">
                        <div class="latest-conf-date">
                            <i class="fas fa-calendar-alt"></i>
                            {{ $conference->created_at->format('h:i') }} / <span
                                style="color: #00d1f9">{{ $conference->created_at->format('M d Y') }}</span>
                        </div>
                        <div class="latest-conference-texts">
                            <a style="font-size: 18px;" class="h4"
                                href="{{ route('conferences.show', ['conference' => $conference->id]) }}">{{ $conference->title }}
                                aaaaaaaaaaaa aaaaaaaaaaaaaaaaa</a>
                        </div>
                    </div>
                </div>
                <div class="latest-conference" style="width: 66%; margin:0;">
                    <div class="main-conference-in style='display: flex;flex-direction: column;'">
                        <div class="main-conference-texts">
                            <a class="h4">{{ $conference->title }}</a>
                        </div>
                        <div class="main-conference-img">
                            <img src="/assets/img/carousel-1.jpg" alt="" style="width: 100%; height: 500px">
                        </div>
                        <div class="main-conference-texts">
                            <p>{{ $conference->description1 }}</p>
                        </div>
                        <div class="main-conference-img-2-all">
                            <div class="main-conference-img-2">
                                <img src="/assets/img/carousel-1.jpg" alt="">
                                <p>{{ $conference->description2 }}</p>
                            </div>
                            <div class="main-conference-img-2">
                                <img src="/assets/img/carousel-1.jpg" alt="">
                                <p>{{ $conference->description3 }}</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="top-conference" style="width: 20%">
                    <div class="top-conference-head">
                        <h5>Ommabop Anjumanlar</h5>
                    </div>
                    <div class="top-conference-in">
                        <div class="latest-conf-date">
                            <i class="fas fa-calendar-alt"></i>
                            {{ $conference->created_at->format('h:i') }} /
                            <span>{{ $conference->created_at->format('M d Y') }}</span>
                        </div>
                        <div class="latest-conference-texts">
                            <a style="font-size: 18px;" class="h4"
                                href="{{ route('conferences.show', ['conference' => $conference->id]) }}">{{ $conference->title }}
                                aaaaaaaaaaaa aaaaaaaaaaaaaaaaa</a>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <!--Latest Conferences End-->

@endsection
