@extends('templates.header')
@section('main')

    <div class="text-center container py-5" style="margin-bottom: 5vh">
        <img class="mb-3" max-height='100px' max-width="100px" src="/test.png" alt="">
        <form class="allCenter flex-column gap-3" action="">
            @csrf
            <div class="d-flex w-100">
                <input class="form-control p-2" placeholder="First Name" type="email">
                <input class="form-control p-2" placeholder="Last Name" type="password">
            </div>

            <input class="form-control p-2" placeholder="Email Address" type="email">
            <input class="form-control p-2" placeholder="Role" type="email">

            <label for="gender" class="w-100 d-flex justify-content-start gap-3">
                <label for="male">Male</label>
                <input class="form-check-input" type="radio" name="gender" value="male" id="male">

                <label for="female">female</label>
                <input class="form-check-input" type="radio" name="gender" value="female" id="female">
            </label>

            <div class="d-flex align-items-center w-100">
                <label class="keep me-3" for="">Display Picture</label>
                <input class="form-control" type="file" placeholder="Display Picture" name="" id="">
            </div>

            <input class="form-control p-2" placeholder="Password" type="password">
            <input class="form-control p-2" placeholder="Confirm Password" type="password">

            <button class="btn btn-lg btn-primary" type="submit">Save</button>
        </form>
    </div>

@endsection
