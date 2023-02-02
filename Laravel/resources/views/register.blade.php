@extends('templates.header')
@section('main')

    <div class="container py-3 w-50 d-flex justify-content-center">
        <form enctype="multipart/form-data" class="d-flex align-items-center flex-column gap-3" action="/register" method="post">
            @csrf
            <h3 class="w-100">Register</h3>
            
            @if($errors->has('first_name'))
                <div class="text-danger">{{ $errors->first('first_name') }}</div>
            @endif
            <input required class="form-control p-2" placeholder="First Name" type="text" name="first_name" value="{{ old('first_name') }}">
        
            @if($errors->has('last_name'))
                <div class="text-danger">{{ $errors->first('last_name') }}</div>
            @endif
            <input required class="form-control p-2" placeholder="Last Name" type="text" name="last_name" value="{{ old('last_name') }}">

            @if($errors->has('email'))
                <div class="text-danger">{{ $errors->first('email') }}</div>
            @endif
            <input required class="form-control p-2" placeholder="Email Address" type="email" name="email" value="{{ old('email') }}">

            <select class="form-select" name="roles">
                <option class="text-muted" selected disabled>Choose Role</option>
                @foreach ($roles as $role)
                    <option value={{ $role->id }} {{ old('roles') == $role->id ? 'selected' : '' }}>{{ $role->role_name }}</option>                    
                @endforeach
            </select>

            <div class="d-flex align-items-center w-100 gap-3">
                @foreach ($genders as $gender)
                    <label for={{ $gender->gender_desc }}>{{ $gender->gender_desc }}</label>
                    <input required class="form-check-input required" type="radio" name="gender" value={{ $gender->id }} id={{ $gender->gender_desc }} 
                    {{ old('gender') == $gender->id ? 'checked' : '' }}>
                @endforeach
            </div>

            @if($errors->has('display_picture'))
                <div class="text-danger">{{ $errors->first('display_picture') }}</div>
            @endif
            <div class="d-flex align-items-center w-100">
                <label for="display_picture" class="keep me-3">Display Picture</label>
                <input required class="form-control" type="file" placeholder="Display Picture" id="display_picture" accept="image/*" name="display_picture">
            </div>

            @if($errors->has('password'))
                <div class="text-danger">{{ $errors->first('password') }}</div>
            @endif
            <input required class="form-control p-2" placeholder="Password" type="password" name="password">
            @if($errors->has('confirm-password'))
                <div class="text-danger">{{ $errors->first('confirm-password') }}</div>
            @endif
            <input required class="form-control p-2" placeholder="Confirm Password" type="password" name="confirm-password" >

            <button class="btn btn-lg btn-primary" type="submit">Submit</button>
            <a href="/login">Already have an account? click here to log in</a>
        </form>
    </div>

@endsection
