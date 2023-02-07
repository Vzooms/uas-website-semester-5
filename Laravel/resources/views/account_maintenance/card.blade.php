<tr>
    <td class="w-50">
        {{$account->first_name . ' ' . $account->last_name }} - {{$account->role->role_name}}
    </td>
    <td class="d-flex gap-2">
        <a href={{'/account_maintenance/detail/'.$account->id}}>
            <button class="btn btn-warning">{{trans('messages.Update Role')}}</button>
        </a>
        <form action="/deleteAccount" method="post">
            @csrf
            @method('delete')
            <input type="hidden" name="id" value={{$account->id}}>
            <button class="btn btn-danger">{{trans('messages.Delete')}}</button>
        </form>
    </td>
</tr>
