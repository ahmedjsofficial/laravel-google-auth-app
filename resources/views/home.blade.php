@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-img">
                    <img src="{{ Auth::user()->avatar }}" alt="user/img" class="img-fluid" />
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <div class="list-group border border-primary">
                        <li class="list-group-item">{{ Auth::user()->google_id }}</li>
                        <li class="list-group-item">{{ Auth::user()->name }}</li>
                        <li class="list-group-item">{{ Auth::user()->email }}</li>
                    </div>

                    {{ __('The logged in is!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
