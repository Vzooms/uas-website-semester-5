@extends('templates.header')
@section('main')
    <div class="position-relative" style='padding-bottom: 5vh;'>

        @include('templates.navbar')

        <div class="container py-5">
            <table class="table table-primary table-striped table-hover">
                <thead>
                    <tr>
                        <th>{{trans('messages.Account')}}</th>
                        <th>{{trans('messages.Action')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($accounts as $account)
                        @include('account_maintenance.card')
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
