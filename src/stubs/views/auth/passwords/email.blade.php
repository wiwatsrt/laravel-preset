@extends('auth.layout')

@section('content')
<div class="container px-4 py-6">
    <div class="mx-auto max-w-sm">
        <div class="bg-white shadow rounded-lg">

            <div class="px-6 py-5">
                <h2 class="font-bold text-lg text-center uppercase mb-8">{{ __('Reset Password') }}</h2>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="mb-6">
                        <label class="block font-bold mb-2" for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="w-full bg-gray-200 rounded px-4 h-12 {{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ old('email') }}" required autofocus>
                        {!! $errors->first('email', '<p role="alert" class="text-red-600 text-sm italic mt-2">:message</p>') !!}
                    </div>

                    <div class="flex">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white focus:outline-none font-bold text-center uppercase px-4 h-12 rounded w-full md:w-auto">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
