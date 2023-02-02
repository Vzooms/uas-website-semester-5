@extends('templates.header')
@section('main')
    <div class="position-relative" style='padding-bottom: 5vh;'>

        @include('templates.navbar')

        <div class="container py-5 d-flex flex-column gap-3">
            <h4>Nama Orang</h4>
            <form action="">
                @csrf
                <div class="d-flex align-items-center gap-3">
                    Role
                    <select class="form-select">
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>

                <div class="d-flex justify-content-end">
                    <button class="btn btn-primary btn-lg mt-5" type="submit">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
