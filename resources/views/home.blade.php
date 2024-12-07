<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
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
          <a href="#" class="b-navbar">Login</a>
        </div>
      </div>
    </div>
    <div class="container">
        <div class="registration-form">
          <h1>Login</h1>
          <form action="{{ route('Login.submit') }}" method="post">
            @csrf
            <p>haloooo</p>
        </form>
        

    
      
          <p>
            Don't have an account? 
            <a href="#" class="p-login">Register</a>
          </p>
        </div>
      
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
      