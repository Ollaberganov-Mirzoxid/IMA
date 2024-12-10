@extends('layouts.main')

@section('title', 'Asosiy Sahifa')

@section('content')
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="login-container">
        <div class="login-container-in">
            <div class="log-reg">
                <h4>Kirish</h4>
                
                <div class="errors" style="color: #fff; text-align:center; background:red">
                    @if ($errors->any())
                        <x-input-error :messages="$errors->get('email')" :prefix="'Email yoki Parol'" class="mt-2" />
                    @endif
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="email">
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="texts">
                            <input type="email" id="email" placeholder="Elektron pochta" name="email" required>
                        </div>
                    </div>

                    <div class="password">
                        <div class="icon">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="texts">
                            <input type="password" id="password" placeholder="Parol" name="password" required>
                        </div>
                    </div>

                    <div class="reg-links">
                        <p>Ro'yxatdan o'tmaganmisiz?</p>
                        <a href="{{ route('register') }}">Ro'yxatdan o'tish</a>
                    </div>

                    <div class="log-reg-submit">
                        <button type="submit">Kirish</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
