@extends('auth.layout')

@section('content')
<div class="container px-4 py-6">
    <div class="mx-auto max-w-md">
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-5">
                <h2 class="font-bold text-lg text-center uppercase mb-8">{{ __('Register') }}</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-6">
                        <label for="name" class="block font-bold mb-2">{{ __('Name') }}</label>
                        <input id="name" type="text" class="w-full bg-gray-200 rounded px-4 h-12 {{ $errors->has('name') ? 'border-red-dark' : 'border-grey-light' }}" name="name" value="{{ old('name') }}" required autofocus>
                        {!! $errors->first('name', '<p role="alert" class="text-red-600 text-sm italic mt-2">:message</p>') !!}
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold mb-2" for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="w-full bg-gray-200 rounded px-4 h-12 {{ $errors->has('email') ? 'border-red-dark' : 'border-grey-light' }}" name="email" value="{{ old('email') }}" required>
                        {!! $errors->first('email', '<p role="alert" class="text-red-600 text-sm italic mt-2">:message</p>') !!}
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold mb-2" for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="w-full bg-gray-200 rounded px-4 h-12 {{ $errors->has('password') ? 'border-red-dark' : 'border-grey-light' }}" name="password" required>
                        {!! $errors->first('password', '<p role="alert" class="text-red-600 text-sm italic mt-2">:message</p>') !!}
                    </div>

                    <div class="mb-6">
                        <label class="block font-bold mb-2" for="password_confirmation">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="w-full bg-gray-200 rounded px-4 h-12" name="password_confirmation" required>
                    </div>

                    <div class="flex flex-wrap items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white focus:outline-none font-bold text-center uppercase px-4 h-12 rounded w-full md:w-auto">
                            {{ __('Register') }}
                        </button>
                        <a href="{{ route('login') }}" class="w-full sm:w-auto text-center text-primary hover:text-primary-dark hover:underline py-3">{{ __('Already have an account') }}?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
