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


    <!-- Digital Portfolio -->
        <h2>Digital Portfolio</h2>
        <div class="form-group">
            <label>Projects or Work Completed</label>
            <input type="text" name="projects_completed" value="{{ Auth::user()->projects_completed }}" readonly>
        </div>
        <div class="form-group">
            <label>Upload Documents/Images</label>
            <div class="file-upload">
                <input type="text" id="portfolio-file-name" class="file-name-input" value="{{ Auth::user()->portfolio_file_name }}" readonly>
                <input type="file" id="portfolio-file" class="file-input" onchange="showFileName('portfolio-file', 'portfolio-file-name')">
                <label for="portfolio-file" class="file-label" onclick="openModal()">
                    <img src="/Source/choose-image.png" alt="Icon" class="icon">
                </label>
            </div>
        </div>

                        <div class="logout">
                    <a href="{{ route('logout') }}">Logout</a>
                </div>       
    
    <div class="modal" id="uploadModal">
        <div class="modal-content">
            <span class="close-btn" onclick="closeModal()">&times;</span>
            <h2>Media Upload</h2>
            <div class="upload-area">
                <input type="file" id="fileInput" hidden>
                <label for="fileInput" class="upload-label">
                    <img src="/Source/upload-image.png" alt="Upload Icon">
                    <button class="browse-btn">Browse files</button>
                </label>
            </div>
            <div class="modal-footer">
                <button onclick="closeModal()" class="cancel-btn">Cancel</button>
                <button class="save-btn">Save</button>
            </div>
        </div>
    </div>

<script src="/Js/filename.js"></script>

</div>

</body>
</html>