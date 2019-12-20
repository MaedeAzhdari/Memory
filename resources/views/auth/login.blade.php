@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="/css/style.css"/>
@section('content')
<div>   
<img class="p-5" src="/Images/diary-book.png" style="width:300px; display:block;margin:0 auto;"/>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
               

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!--<div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>-->

                        <div class="form-group row">
                            <div class="col">
                            <input placeholder="نام کاربری" id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col">
                                <input placeholder="کلمه عبور" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input  class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('مرا به خاطر بسپار') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">


                            <div class="col offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ورود') }}
                                </button>

                                <div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('فراموشی رمز عبور') }}
                                    </a>
                                @endif
                                </div>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
