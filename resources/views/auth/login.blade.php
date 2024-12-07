<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        <link rel="stylesheet" href="{{ asset('CSS/EduEmpower.css') }}">
        <link rel="stylesheet" href="{{ asset('CSS/Login.css') }}">
    </head>    
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-left">
            <img src="/Source/EduEmpower Logo.png" alt="EduEmpower Logo" />
        </div>
        <div class="navbar-center">
            <div>
                <a href="#" class="a-navbar">Home</a>
            </div>
            <div>
                <a href="#" class="a-navbar">Lowongan Magang</a>
            </div>
            <div>
                <a href="#" class="a-navbar">Kursus</a>
            </div>
        </div>
        <div class="navbar-right">
            <div>
                <a href="Register.html" class="b-navbar">Register</a>
            </div>
            <div>
                <a href="#" class="b-navbar">Login</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="registration-form">
            <h1>Login</h1>
            <!-- Session Status (Message Handling) -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password"
                                  name="password"
                                  required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                        <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Actions -->
                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                    <x-primary-button class="ms-3">
                        {{ __('Log in') }}
                    </x-primary-button>
                </div>
            </form>
        </div>

        <!-- Info Card -->
        <div class="info-card">
            <img src="/Source/EduEmpower.png" alt="EduEmpower Logo" class="card-logo" />
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a mi rhoncus, pharetra leo et. 
                <a href="#" class="sign-up-link">Sign in</a> or <a href="#" class="sign-up-link">Sign up</a> to get started!
            </p>
        </div>
    </div>

    <div class="info-text-below">
        <blockquote>
            Find the most exciting jobs in tech.
        </blockquote>
    </div>
    </html>