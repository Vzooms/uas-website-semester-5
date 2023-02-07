@extends('templates.header')
@section('main')

    <div class="position-absolute top-50 start-50 translate-middle allCenter flex-column rounded-circle border border-primary border-5" style="width:30vw; height:30vw">
        <h2>
            {{ trans('messages.'.$header) }} !
        </h2>
        <p>
            {{trans('messages.'.$body)}}
        </p>
        <a class="text-decoration-underline" href={{$link}}>
            {{trans('messages.'.$footer)}}
        </a>
    </div>

@endsection
