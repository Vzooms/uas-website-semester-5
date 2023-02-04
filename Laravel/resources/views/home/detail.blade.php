@extends('templates.header')
@section('main')
    <div class="position-relative" style='padding-bottom: 5vh;'>

        @include('templates.navbar')

        <div class="container py-5 d-flex flex-column">
            <h4>{{$item->item_name}}</h4>
            <div class="d-flex w-100 gap-5">
                <div style="width:20%">
                    <img class="w-100" src="/test.png" alt="">
                </div>

                <div style="width: 80%">
                    <h5>Price : Rp. {{$item->price}},-</h5>
                    <p>
                        {{ $item->item_desc }}
                    </p>
                </div>
            </div>

            <form class="d-flex justify-content-end" action="/createOrder" method="post">
                @csrf
                <input type="hidden" name="item_id" value={{$item->id}}>
                <input type="hidden" name="price" value={{$item->price}}>
                <button type="submit" class="btn btn-warning">
                    Buy
                </button>
            </form>
        </div>
    </div>

@endsection
