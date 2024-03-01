<div class="d-flex align-items-center justify-content-between">
    <img src="./test.png" alt="">
    <h4 class="m-0">{{$order->item->item_name}}</h4>
    <h4 class="m-0">Rp. {{$order->price}},-</h4>

    <form action="/removeOrder" method="post">
        @csrf
        @method('delete')
        <input type="hidden" name="order_id" value={{$order->id}}>
        <button type="submit" class="btn btn-danger">
            {{trans('messages.Delete')}}
        </button>
    </form>

</div>
