@extends('templates.header')
@section('main')
    <div class="position-relative" style='padding-bottom: 5vh;'>

        @include('templates.navbar')

        {{-- <div class="container py-5 d-flex flex-column gap-3">
            @include('account_maintenance.card')
            @include('account_maintenance.card')
            @include('account_maintenance.card')
            @include('account_maintenance.card')
            @include('account_maintenance.card')
            @include('account_maintenance.card')
            @include('account_maintenance.card')
        </div> --}}
        <div class="container py-5">
            <table class="table table-primary table-striped table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Number</th>
                        <th>Account</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                    @include('account_maintenance.card')
                </tbody>
            </table>
        </div>
    </div>

@endsection
