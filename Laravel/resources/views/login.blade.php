@extends('templates.header')
@section('main')

    <div class="position-absolute top-50 start-50 translate-middle text-center">
        <h3>
            Login
        </h3>
        <form class="allCenter flex-column gap-3" action="/login" method="post">
            @csrf
            @if ($errors->isNotEmpty())
                <div class="text-danger"> Wrong email or password </div>
            @endif
            <input class="form-control p-2" placeholder="Email Address" name="email" value="{{ old('email') }}" type="email">
            <input class="form-control p-2" placeholder="Password" type="password" name="password">

            <button class="btn btn-lg btn-primary" type="submit">Submit</button>
            <a href="/register">Don't have an account? click here to register</a>
        </form>
    </div>

@endsection
