<div class="col gap-1 text-center pb-5">
    <img src="./test.png" alt="vege">
    <p class="m-0">{{$item->item_name}}</p>
    <a href={{'detail/'. $item->id}}>{{trans('messages.Detail')}}</a>
</div>
