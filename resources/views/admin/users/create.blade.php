@extends('layouts.app', ['dno'=> true])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Stvori novog korisnika') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.users.store') }}">
                       @include('admin.users.partials.form',['create'=> true])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
