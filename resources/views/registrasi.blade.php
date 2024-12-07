<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link rel="stylesheet" href="/CSS/EduEmpower.css" />
    <link rel="stylesheet" href="/CSS/Register.css" />
  </head>
  <body>
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
          <a href="Login.html" class="b-navbar">Login</a>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="registration-form text start">
          <h1>Register</h1>
          <form action="{{ route('Registrasi.submit') }}" method="post">
            @csrf
            <label for="email">Email</label>
            <input type="text" id="email" name="email" class="form-control mb-2" required />
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control mb-2" required />
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control mb-2" required />
             <a href="ForgotPassword.html">
              <label class="forgot-password">Forgot password ?</label>
            </a>
            <button type="submit" class="btn btn-primary">Create an account</button>          </form>
          <p>
            Already have an account?
            <a href="Login.html" class="p-login">Login</a>
          </p>
        </div>
      
        <div class="info-card">
          <img src="/Source/EduEmpower.png" alt="EduEmpower Logo" class="card-logo" />
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a mi rhoncus, pharetra leo et. 
            <a href="#" class="Login.html">Sign in</a> or <a href="#" class="Register.html">Sign up</a> to get started!
          </p>
        </div>
      </div>
      
      <!-- Teks tambahan di luar .container agar berada di bawah info-card -->
      <div class="info-text-below">
        Find the most exciting jobs in tech.
      </div>
      