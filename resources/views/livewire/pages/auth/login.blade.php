<?php

use App\Livewire\Forms\LoginForm;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

use function Livewire\Volt\form;
use function Livewire\Volt\layout;

layout('layouts.guest');

form(LoginForm::class);

$login = function () {
    $this->validate();

    $this->form->authenticate();

    Session::regenerate();


    // if(Auth::user()->role_id == 1 && Auth::user()->department_id == 1){
    // return redirect(route('mvrsuperadmin.dashboard'));
    // }
    if(Auth::user()->role_id == 1 && Auth::user()->department_id == null){
    return redirect(route('superadmin.dashboard'));
    }
    // if(Auth::user()->role_id == 1 && Auth::user()->department_id == 3){
    // return redirect(route('stpsuperadmin.dashboard'));
    // }

    $this->redirect(
        session('url.intended', route('homepage')),
        navigate: true
    );
};

?>

<div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form wire:submit="login">
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Е-маил')" />
            <x-text-input wire:model="form.email" id="email" class="block mt-1 w-full" type="email" name="email"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Лозинка')" />

            <x-text-input wire:model="form.password" id="password" class="block mt-1 w-full" type="password"
                name="password" required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    href="{{ route('password.request') }}" wire:navigate>
                    {{ __('Ја заборави Лозинката?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Најави се') }}
            </x-primary-button>
        </div>
    </form>
</div>
