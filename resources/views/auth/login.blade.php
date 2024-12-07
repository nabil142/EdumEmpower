<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
        <link rel="stylesheet" href="/CSS/EduEmpower.css">
        <link rel="stylesheet" href="/CSS/Login.css">
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
        <!-- Login Form -->
        <div class="registration-form">
            <h1>Login</h1>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <!-- Email -->
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required />
    
                <!-- Password -->
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required />
    
                <!-- Forgot Password -->
                @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    <label class="forgot-password">Forgot password?</label>
                </a>
                @endif
    
                <!-- Login Button -->
                <button type="submit">Login</button>
            </form>
    
            <!-- Register Link -->
            <p>
                Don't have an account? 
                <a href="{{ route('register') }}" class="p-login">Register</a>
            </p>
        </div>
    
        <!-- Info Card -->
        <div class="info-card">
            <img src="/Source/EduEmpower.png" alt="EduEmpower Logo" class="card-logo" />
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a mi rhoncus, pharetra leo et. 
                <a href="{{ route('login') }}" class="sign-up-link">Sign in</a> or 
                <a href="{{ route('register') }}" class="sign-up-link">Sign up</a> to get started!
            </p>
        </div>
    </div>
    
    <div class="info-text-below">
        <blockquote>
            Find the most exciting jobs in tech.
        </blockquote>
    </div>
    
    </html>