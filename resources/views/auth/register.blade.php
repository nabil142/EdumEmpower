<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
        <link rel="stylesheet" href=CSS/EduEmpower.css>
        <link rel="stylesheet" href=CSS/Register.css>
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
                <a href="{{ route('register') }}" class="b-navbar">Register</a>
            </div>
            <div>
                <a href="{{ route('login') }}" class="b-navbar">Login</a>
            </div>
        </div>
    </div>

    <!-- Registration Form -->
    <div class="container">
        <div class="registration-form">
            <h1>Register</h1>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <label for="name" class="form-label">Name</label>
                    <input id="name" type="text" name="name" class="form-control mb-2" value="{{ old('name') }}" required autofocus />
                    @error('name')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="form-label">Email</label>
                    <input id="email" type="email" name="email" class="form-control mb-2" value="{{ old('email') }}" required />
                    @error('email')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>


                <!-- Password -->
                <div>
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" name="password" class="form-control mb-2" required />
                    @error('password')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div>
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" class="form-control mb-2" required />
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Create an account</button>
            </form>
            <p class="mt-3">
                Already have an account? 
                <a href="{{ route('login') }}" class="p-login">Login</a>
            </p>
        </div>

        <!-- Info Card -->
        <div class="info-card">
            <img src="/Source/EduEmpower.png" alt="EduEmpower Logo" class="card-logo" />
            <p class="card-text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a mi rhoncus, pharetra leo et. 
                <a href="{{ route('login') }}" class="sign-up-link">Sign in</a> or 
                <a href="{{ route('register') }}" class="sign-up-link">Sign up</a> to get started!
            </p>
        </div>
    </div>

    <!-- Info Text Below -->
    <div class="info-text-below">
        <blockquote>
            Find the most exciting jobs in tech.
        </blockquote>
    </div>
    </html>