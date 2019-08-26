@extends('layouts.app')

@section('content')
<div class="container">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('peoples.store') }}">
                        @csrf
                        @method('POST')
                        <div class="form-m">
                            <label class="description" for="fname">{{ __('نام: ') }}</label>
                            <div>
                                <input type="text" class="form-input" name="fname" id="fname" />
                            </div>
                        </div>
                        <div class="form-m">
                            <label class="description" for="lname">{{ __('نام خانوادگی: ') }}</label>
                            <div>
                                <input type="text" class="form-input" name="lname" id="lname" />
                            </div>
                        </div>
                        <div class="form-m">
                            <label class="description" for="company">{{ __('شرکت/ سازمان: ') }}</label>
                            <div>
                                <input type="text" class="form-input" name="company" id="company" />
                            </div>
                        </div>
                        <div class="form-m">
                            <label class="description" for="number">{{ __('شماره: ') }}</label>
                            <div>
                                <input type="text" class="form-input" name="number" id="number" />
                            </div>
                        </div>
                        <div style="text-align:center; margin-top: 2em;">
                                <button type="submit" class="btn-link">
                                    {{ __('ثبت') }}
                                </button>
                        </div>

                    </form>
</div>
@endsection
