<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduEmpower - Profile</title>
    <!-- Tambahkan custom CSS -->
    <link rel="stylesheet" href="/CSS/Navbar-login.css">
    <link rel="stylesheet" href="/CSS/Profil.css">
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="navbar-left">
            <img src="{{ asset('Source/EduEmpower Logo.png') }}" alt="EduEmpower Logo" class="logo">
        </div>
        <div class="navbar-center">
            <a href="#" class="a-navbar">Home</a>
            <a href="#" class="a-navbar">Lowongan Magang</a>
            <a href="#" class="a-navbar">Kursus</a>
        </div>
        <div class="navbar-right">
            <span>Welcome, {{ Auth::user()->name }}</span>
            <img src="{{ asset('Source/icon-navbar1.png') }}" alt="User Icon" class="user-icon">
        </div>
    </div>

<!-- Profile Container -->
<div class="profile-container">
    <!-- Personal Information -->
    @include('profile.partials.update-profile-information-form')


             <div class="logout">
                    <a href="{{ route('logout') }}">Logout</a>
                </div>       
</div>

</body>
</html>