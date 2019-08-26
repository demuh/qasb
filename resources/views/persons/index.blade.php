@extends('layouts.app')

@section('content')
<div class="container">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <div class="title center">لیست نفرات</div>
                   <div style="display:flex; flex-direction: row;">
                   @foreach ($people as $peoples)
                        <div class="peoplebox">
                            <span>نام: {{$peoples->fname}} {{$peoples->lname}} </span><br />
                            <span>شرکت: {{$peoples->company}}</span><br />
                            <span>شماره: {{$peoples->number}}</span>
                        </div>
                   @endforeach
                   </div>
</div>
@endsection
