@extends('layout')

@section('header')
@endsection
@section('content')

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2>Welcome to our website</h2>
                    <span class="byline">{{$article->title}}</span> </div>
                <p><img src="/images/banner2.jpg" alt="" class="image image-full" /> </p>
                <p>{{$article->body}}</p>
            </div>
        </div>
    </div>
@endsection
@section('footer')
@endsection
