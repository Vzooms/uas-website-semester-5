@extends('templates.header')
@section('main')
    <div class="position-relative" style='padding-bottom: 5vh;'>

        @include('templates.navbar')

        <div class="container py-5 d-flex flex-column gap-3">
            <h4 class="text-decoration-underline"> Cart </h4>
            @include('cart.card')
            @include('cart.card')
            @include('cart.card')
            @include('cart.card')
            @include('cart.card')
            @include('cart.card')
            @include('cart.card')
            <div class="d-flex align-items-center justify-content-end gap-2 mt-5">
                <h3>Total : </h3>
                <h4>Rp. 350.000,-</h4>
                <button class="btn btn-lg btn-warning">
                    <h5 class="m-0">Check Out</h5>
                </button>
            </div>
        </div>
    </div>

@endsection
