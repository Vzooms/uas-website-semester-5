@extends('templates.header')
@section('main')
    <div class="position-relative" style='padding-bottom: 5vh;'>

        @include('templates.navbar')

        <div class="container py-5">
            <div class="row row-cols-5 ">
                @include('home.card')
                @include('home.card')
                @include('home.card')
                @include('home.card')
                @include('home.card')
                @include('home.card')
                @include('home.card')
            </div>
        </div>
    </div>

@endsection
