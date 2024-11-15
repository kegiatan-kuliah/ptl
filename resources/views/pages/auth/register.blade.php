@extends('layouts.auth')
@section('title', 'Register')
@section('content')
<x-card :containerClasses="['card-outline', 'card-primary']">
    <x-slot:header>
        <div class="card-header text-center">
            <a href="#" class="h1"><b>Admin</b></a>
        </div>
    </x-slot:header>
    <p class="login-box-msg">Register</p>

    <x-form action="../../index3.html" method="post">
        <div class="input-group mb-3">
            <x-input-text name="name" type="text" class="form-control" placeholder="Name" />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-user"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <x-input-text name="email" type="email" class="form-control" placeholder="Email" />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        <div class="input-group mb-3">
            <x-input-text name="password" type="password" class="form-control" placeholder="Password" />
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <x-button type="submit" color="primary">Register</x-button>
            </div>
        </div>
    </x-form>
    <p class="mb-0 mt-2">
        <a href="{{ route('auth.login.index') }}" class="text-center">Already registered? Sign in here</a>
    </p>
</x-card>
@endsection