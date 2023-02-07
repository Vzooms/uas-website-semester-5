@extends('templates.header')
@section('main')

    @include('templates.navbar')

    <div class="text-center container py-5" style="margin-bottom: 5vh">
        <form enctype="multipart/form-data" class="d-flex align-items-center flex-column gap-3" action="/editProfile" method="post">
            @csrf
            @method('patch')
            <img class="mb-3 rounded-circle" width="150px" height="150px" src="{{'/storage/images/'.$account->display_picture_link}}" alt="">

            @if($errors->has('first_name'))
                <div class="text-danger">{{ $errors->first('first_name') }}</div>
            @endif
            <input required class="form-control p-2" placeholder="{{ trans('messages.FirstName') }}" type="text" name="first_name" value={{ $account->first_name }}>

            @if($errors->has('last_name'))
                <div class="text-danger">{{ $errors->first('last_name') }}</div>
            @endif
            <input required class="form-control p-2" placeholder="{{trans('messages.LastName')}}" type="text" name="last_name" value={{ $account->last_name }}>

            @if($errors->has('email'))
                <div class="text-danger">{{ $errors->first('email') }}</div>
            @endif
            <input required class="form-control p-2" placeholder="{{trans('messages.EmailAddress')}}" type="email" name="email" value={{ $account->email }}>

            <select class="form-select" name="roles" disabled>
                @foreach ($roles as $role)
                    <option value={{ $role->id }} {{ $account->role->id == $role->id ? 'selected' : '' }}>{{ $role->role_name }}</option>
                @endforeach
            </select>

            <div class="d-flex align-items-center w-100 gap-3">
                @foreach ($genders as $gender)
                    <label for={{ $gender->gender_desc }}>{{ trans('messages.'.$gender->gender_desc) }}</label>
                    <input required class="form-check-input required" type="radio" name="gender" value={{ $gender->id }} id={{ $gender->gender_desc }}
                    {{ $account->gender->id == $gender->id ? 'checked' : '' }}>
                @endforeach
            </div>

            @if($errors->has('display_picture'))
                <div class="text-danger">{{ $errors->first('display_picture') }}</div>
            @endif
            <div class="d-flex align-items-center w-100">
                <label for="display_picture" class="keep me-3">{{ trans('messages.Display Picture') }}</label>
                <input required class="form-control" type="file" placeholder="Display Picture" id="display_picture" accept="image/*" name="display_picture">
            </div>

            @if($errors->has('password'))
                <div class="text-danger">{{ $errors->first('password') }}</div>
            @endif
            <input required class="form-control p-2" placeholder="{{trans('messages.Password')}}" type="password" name="password">
            @if($errors->has('confirm-password'))
                <div class="text-danger">{{ $errors->first('confirm-password') }}</div>
            @endif
            <input required class="form-control p-2" placeholder="{{trans('messages.Confirm Password')}}" type="password" name="confirm-password">

            <button class="btn btn-lg btn-primary" type="submit">{{trans('messages.Save')}}</button>
        </form>
    </div>

@endsection
