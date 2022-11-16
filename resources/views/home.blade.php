@extends('layouts.app')

@section('content')
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">{{ __('Dashboard') }}</div>
                                    <div class="card-body">
                                        @if (session('status'))
                                            <div class="alert alert-success" role="alert">
                                            {{ session('status') }}
                                            </div>
                                        @endif
                
                                    {{ __('You are logged in!') }}
                                    </div>

                                    <div class="d-grid mx-auto mt-4 mb-4">
                                        <a href="/dashboard" class="btn btn-outline-primary">Click Here To Dashboard</a>
                                    </div>
                            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
