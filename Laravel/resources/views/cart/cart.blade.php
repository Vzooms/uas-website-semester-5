@extends('templates.header')
@section('main')
    <div class="position-relative" style='padding-bottom: 5vh;'>

        @include('templates.navbar')

        <div class="container py-5 d-flex flex-column gap-3">
            <h4 class="text-decoration-underline"> Cart </h4>
            @forelse ($orders as $order)
                @include('cart.card')
            @empty
                <h5 class="text-center">
                    Your cart is empty.
                    <a href="/home">
                        Click here to see our products
                    </a>
                </h5>
            @endforelse
            {{-- @foreach ($orders as $order)
                @include('cart.card')
            @endforeach --}}
            <form class="d-flex align-items-center justify-content-end gap-2 mt-5" method="post" action='/checkOut'>
                @method('delete')
                @csrf
                <h3>Total : </h3>
                <h4>Rp. {{$sub_price}},-</h4>
                <button type="submit" class="btn btn-lg btn-warning">
                    <h5 class="m-0">Check Out</h5>
                </button>
            </form>
        </div>
    </div>

@endsection
