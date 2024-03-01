@extends('templates.header')
@section('main')

    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h3> {{ trans('messages.Login') }} </h3>
        <form class="allCenter flex-column gap-3" action="/login" method="post">
            @csrf
            @if ($errors->isNotEmpty())
                <div class="text-danger"> {{ trans('messages.Wrong Email/Password. Please Check Again') }} </div>
            @endif
            <input class="form-control p-2" placeholder="{{ trans('messages.EmailAddress') }}" name="email" value="{{ old('email') }}" type="email">
            <input class="form-control p-2" placeholder={{trans('messages.Password')}} type="password" name="password">

            <button class="btn btn-lg btn-primary" type="submit">{{ trans('messages.Submit') }}</button>
            <a href="/register">{{ trans('messages.Already have an account? click here to log in') }}</a>
    </form>
    </div>

@endsection
