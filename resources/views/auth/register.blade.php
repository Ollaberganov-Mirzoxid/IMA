@extends('layouts.main')

@section('title', 'Asosiy Sahifa')

@section('content')
    <x-auth-session-status class="mb-4" :status="session('status')" />
    
    <div class="login-container">
        <div class="login-container-in">
            <div class="log-reg">
                <h4>Ro'yxatdan o'tish</h4>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="name">
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="texts">
                            <input type="text" placeholder="F.I.O" name="name" 
                            :value="old('name')" required autofocus autocomplete="name">
                        </div>
                    </div>
                    <div class="email">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="texts">
                            <input type="email" placeholder="Elektron pochta" 
                            name="email" :value="old('email')" required autocomplete="username">
                        </div>
                    </div>
                    <div class="password">
                        <div class="icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="texts">
                            <input type="password" placeholder="Parol"
                            name="password" required autocomplete="new-password" />>
                        </div>
                    </div>
                    <div class="password">
                        <div class="icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="texts">
                            <input type="password" placeholder="Parol tekshirish"
                            name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="reg-links">
                        <p>Ro'yxatdan o'tganmisiz?</p>
                        <a href="{{ route('login') }}">Kirish</a>
                    </div>
                    <div class="log-reg-submit">
                        <button type="submit">Ro'yxatdan o'tish</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection