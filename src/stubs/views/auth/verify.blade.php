@extends('auth.layout')

@section('content')
<div class="container px-4 py-6">
    <div class="mx-auto max-w-sm">
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-5">
                <h2 class="font-bold text-lg text-center uppercase mb-8">{{ __('Verify Your Email Address') }}</h2>
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
            </div>
        </div>
    </div>
</div>
@endsection
