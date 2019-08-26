@extends('layouts.app')

@section('content')
<div class="container">

                <div class="title center">{{ __('عضویت') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div >
                            <label for="name" class="description">{{ __('نام') }}</label>

                            <div>
                                <input id="name" type="text" class="form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="email" class="description">{{ __('ایمیل') }}</label>

                            <div>
                                <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div >
                            <label for="password" class="description">{{ __('رمز عبور') }}</label>

                            <div>
                                <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="password-confirm" class="description">{{ __('تأییدۀ رمز عبور') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div style="text-align:center; margin-top: 2em;">
                            <div>
                                <button type="submit" class="btn-link">
                                    {{ __('عضویت') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
</div>
@endsection
