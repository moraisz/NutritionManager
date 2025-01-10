@extends('guest.layouts.app')

@section('title', 'Login')

@section('content')
    <form action="{{ route('login') }}" method="POST" class="flex flex-col gap-4">
        @csrf

        <h1 class="text-2xl text-white">Login</h1>

        <div>
            <x-input-label for="email" :value="__('Email')"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="password" :value="__('Senha')"/>
            <x-text-input id="password" class="block mt-1 w-full" 
                            type="password" 
                            name="password" 
                            required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                {{ __('Esqueceu a senha?') }}
            </a>
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800 ms-3" href="{{ route('register') }}">
                {{ __('Não possui conta?') }}
            </a>
            <x-primary-button class="ms-3" :value="__('Log in')" />
        </div>
    </form>
@endsection