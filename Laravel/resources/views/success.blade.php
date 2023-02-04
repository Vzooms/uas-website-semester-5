@extends('templates.header')
@section('main')

    <div class="position-absolute top-50 start-50 translate-middle allCenter flex-column rounded-circle border border-primary border-5" style="width:30vw; height:30vw">
        <h2>
            {{$header}}
        </h2>
        <p>
            {{$body}}
        </p>
        <a class="text-decoration-underline" href={{$link}}>
            {{$footer}}
        </a>
    </div>

@endsection
