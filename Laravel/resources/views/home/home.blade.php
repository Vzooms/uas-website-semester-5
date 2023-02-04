@extends('templates.header')
@section('main')

    <div class="position-relative" style='padding-bottom: 5vh;'>

        @include('templates.navbar')

        <div class="container py-5">
            <div class="row row-cols-5 ">
                @foreach ($items as $item)
                    @include('home.card')
                @endforeach
            </div>
            <div class="allCenter">
                {{$items->links()}}
            </div>
        </div>
    </div>

@endsection
