@extends('auth.layout')

@section('content')
<div class="container px-4 py-6">
    <div class="mx-auto max-w-md">
        <div class="bg-white shadow rounded-lg">
            <div class="px-6 py-5">
                <h2 class="font-bold text-lg text-center uppercase mb-8">{{ __('Welcome Back!') }}</h2>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-6">
                        <label class="block font-bold mb-2" for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="w-full bg-gray-200 rounded px-4 h-12 {{ $errors->has('email') ? 'border-red-dark' : 'border-gray-400' }}" name="email" value="{{ old('email') }}" required autofocus>
                        {!! $errors->first('email', '<p role="alert" class="text-red-600 text-sm italic mt-2">:message</p>') !!}
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block font-bold mb-2">{{ __('Password') }}</label>
                        <input id="password" type="password" class="w-full bg-gray-200 rounded px-4 h-12 {{ $errors->has('password') ? 'border-red-dark' : 'border-grey-light' }}" name="password" required>
                        {!! $errors->first('password', '<p role="alert" class="text-red-dark text-sm italic mt-2">:message</p>') !!}
                    </div>

                    <div class="mb-6">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>
                        <label class="ml-2" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>

                    <div class="flex flex-wrap items-center justify-between">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white focus:outline-none font-bold text-center uppercase px-4 h-12 rounded w-full md:w-auto">
                            {{ __('Login') }}
                        </button>
                        <a href="{{ route('password.request') }}" class="w-full sm:w-auto text-center text-primary hover:text-primary-dark hover:underline py-3">{{ __('Forgot Your Password') }}?</a>
                    </div>
                </form>
            </div>
            <div class="px-6 py-5 border-t-2 bg-gray-100 rounded-b-lg border-gray-200">
                <div class="flex justify-center text-sm md:text-base">
                    <a href="{{ route('register') }}" class="font-bold text-blue-500 hover:text-blue-600">{{ __('Don\'t have an account yet') }}?</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
