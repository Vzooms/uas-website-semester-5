@extends('templates.header')
@section('main')

    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h3>{{ trans('messages.Find and buy your grocery here !') }}</h3>
        <p>{{ trans('messages.Please Login First') }}</p>
        <a href="/login">{{ trans('messages.Click here to login') }}</a>
    </div>

@endsection
