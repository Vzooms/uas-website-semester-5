@extends('templates.header')
@section('main')
    <div class="position-relative" style='padding-bottom: 5vh;'>

        @include('templates.navbar')

        <div class="container py-5 d-flex flex-column gap-3">
            <h4>{{$account->first_name . ' ' . $account->last_name}}</h4>
            <form action="/editAccountMaintenance" method="post">
                @method('patch')
                @csrf
                <div class="d-flex align-items-center gap-3">
                    Role
                    <select class="form-select" name="role" >
                        @foreach ($roles as $role)
                            <option {{ $account->role->id == $role->id ? 'selected' : '' }} value={{$role->id}}>{{$role->role_name}}</option>
                        @endforeach
                    </select>
                </div>
                <input type="hidden" name="id" value={{$account->id}}>
                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary btn-lg mt-5" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
