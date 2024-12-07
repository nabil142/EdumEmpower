<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduEmpower - Profile</title>
    <!-- Tambahkan custom CSS -->
    <link rel="stylesheet" href="{{ asset('CSS/Navbar-login.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS/Profil.css') }}">
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
        <div class="profile-section">
            <h2>Personal Information</h2>
            <!-- Form Update Profile -->
            @include('profile.partials.update-profile-information-form')
        </div>

        <!-- Change Password -->
        <div class="profile-section">
            <h2>Change Password</h2>
            <!-- Form Update Password -->
            @include('profile.partials.update-password-form')
        </div>

        <!-- Delete Account -->
        <div class="profile-section">
            <h2>Delete Account</h2>
            <!-- Form Delete User -->
            @include('profile.partials.delete-user-form')
        </div>

        <!-- Learning Profile -->
        <div class="profile-section">
            <h2>Learning Profile</h2>
            <form>
                <div class="form-group">
                    <label>Academic Achievement</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label>Skills Mastered</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label>Completed Courses</label>
                    <input type="text">
                </div>
                <div class="form-group">
                    <label>Obtained Certificates</label>
                    <input type="file">
                </div>
                <div class="logout">
                    <a href="{{ route('logout') }}">Logout</a>
                </div>                        
            </form>
        </div>
    </div>

    <!-- Tambahkan Custom JS -->
    <script src="{{ asset('Js/filename.js') }}"></script>
</body>
</html>

