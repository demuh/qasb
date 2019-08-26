@extends('layouts.app')

@section('content')
<div>
                <div class="title center">{{ __('ورود') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label for="email" class="description">{{ __('نام کاربری') }}</label>

                            <div>
                                <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password" class="description">{{ __('رمز عبور') }}</label>

                            <div>
                                <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <div>
                                <div >
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label for="remember">
                                        {{ __('به خاطر بسپار') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div style="text-align:center; margin-top: 2em;">
                                <button type="submit" class="btn-link">
                                    {{ __('ورود') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="links" href="{{ route('password.request') }}">
                                        {{ __('فراموش کرده‌ام!') }}
                                    </a>
                                @endif
                            </div>
                    </form>
                </div>
</div>
@endsection
