@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div style="display:flex; flex-direction: row;">
            <a href="{{ url('/peoples') }}">
                <div class="peoplebox" style="padding: 7rem; font-size:4rem;">فهرست</div></a>
            <a href="{{ url('/peoples/create') }}">
                <div class="peoplebox" style="padding: 7rem; font-size:4rem;">افزودن</div>
            </a>
        </div>
</div>
@endsection
