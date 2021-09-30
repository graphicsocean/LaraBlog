@extends('layouts.auth')
@section('content')
<div class="card-body">
    <p class="login-box-msg">Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</p>
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
      <div class="input-group mb-3">
        <input class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" required autofocus>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Email Password Reset Link</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <p class="mt-3 mb-1">
      <a href="{{route('login')}}">Login</a>
    </p>
  </div>

@endsection

{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('Email Password Reset Link') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
