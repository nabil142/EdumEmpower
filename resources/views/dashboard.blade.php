<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
            <title>EduEmpower</title>
            <link rel="stylesheet" href="/CSS/EduEmpower.css"/>
            <link rel="stylesheet" href="/CSS/index.css"/>
        </head>  
        <body>
            <!-- Navbar -->
            
            <div class="navbar">
                <div class="navbar-left">
                    <img src="/Source/EduEmpower Logo.png" alt="logo_eduempower2">
                </div>
                <div class="navbar-center">
                    <div>
                        <a href="{{ route('superadmin.categories.index') }}" class="a-navbar">Manage Categories</a>
                    </div>
                    <div>
                        <a href="#" class="a-navbar">Manage Lowongan Magang</a>
                    </div>
                    <div>
                        <a href="{{ route('superadmin.courses.index') }}" class="a-navbar">Manage Kursus</a>
                    </div>
                    <div>
                        <a href="{{ route('superadmin.admins.index') }}" class="a-navbar">Manage Mentor</a>
                    </div>
                </div>
                <div class="navbar-right">
                    <span>Welcome, [UserName]</span>
                    <a href="{{ route('profile.edit') }}">
                        <img src="/Source/icon-navbar1.png" alt="User Icon" class="user-icon">
                    </a>
                </div>
            </div> 
            
            <!-- Konten Utama -->
            <div class="main-content">
                <!-- Banner -->
                <section class="banner-section">    
                    <div class="container">
                        <div class="badge-container">
                          <span class="badge">new</span>
                          <span class="badge-text">Stay connected to get upcoming jobs</span>
                        </div>
                        <p1
                         class="main-text">Find the most exciting jobs in tech.</p1>
                      </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a mi rhoncus, pharetra leo et, <a href="#">sign in</a> or <a href="#">sign up</a> to get started!</p>
                    <img src="/Source/logo_FILKOM.png" alt="FILKOM Logo" class="logo">
                </section>

                <!-- Lowongan Magang -->
                <div class="section-job-section">
                    <h2>Explore the latest job openings</h2>
                    <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a mi rhoncus, pharetra leo et. <a href="#">Sign in</a> or <a href="#">Sign up</a> to get started!</p>
                    <button class="see-all-btn">see all job</button>
                    
                    <div class="cards-container-work1">
                        <div class="job-card-instagram">
                            <div class="company-info-instagram">
                                <img src="/Source/instagram-logo.png" alt="Instagram Logo" class="company-logo-instagram">
                                <div class="job-details">
                                    <p class="company">Instagram</p>
                                    <p class="date">October 30, 2024</p>
                                </div>
                            </div>
                            <h3>Front End Developer</h3>
                            <div class="tags">
                                <span1 class="tag1">Marketing</span1>
                                <span class="tag">Part Time</span>
                            </div>
                            <div class="location-salary">
                                <div class="location">
                                    <span class="icon">📍</span>
                                    <span>San Antonio</span>
                                </div>
                                <div class="salary">
                                    <span class="icon">💲</span>
                                    <span>$130k-$160k</span>
                                </div>
                            </div>
                        </div>
                    </div>  
                    </div>
                </section>
                

                <!-- Work with Companies -->
                <section class="section-work" id="sectionwork">
                    <h2>Work with Exciting Companies</h2>
                    <h5 class="work-description">Discover more than 1,600 open positions!</h5> 
                    <div class="navigation-buttons">
                        <button class="prevButton"><</button>                
                        <button class="nextButton">></button>         
                    </div>
                    <div class="cards-work-container">
                        <div class="cards-work1">
                        <div class="job-card-spotify">
                            <div class="company-info-spotify">
                                <img src="/Source/spotify-logo.png" alt="Spotify Logo" class="company-logo-spotify">
                                <div class="job-details-spotify">
                                    <p class="company-spotify">Spotify</p>
                                    <p class="date-spotify">January 23, 2025</p>
                                </div>
                            </div>
                            <h3 class= "h3-spotify">Digital Media Strategist</h3>
                            <div class="tags-spotify">
                                <span1 class="tag1-spotify">Business</span1>
                                <span class="tag-spotify">Casual</span>
                            </div>
                            <div class="location-salary-spotify">
                                <div class="location-spotify">
                                    <span class="icon-spotify">📍</span>
                                    <span>Banten City</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="cards-work2">
                        <div class="job-card-spotify">
                            <div class="company-info-spotify">
                                <img src="/Source/spotify-logo.png" alt="Spotify Logo" class="company-logo-spotify">
                                <div class="job-details-spotify">
                                    <p class="company-spotify">Spotify</p>
                                    <p class="date-spotify">January 23, 2025</p>
                                </div>
                            </div>
                            <h3 class= "h3-spotify">Digital Media Strategist</h3>
                            <div class="tags-spotify">
                                <span1 class="tag1-spotify">Business</span1>
                                <span class="tag-spotify">Casual</span>
                            </div>
                            <div class="location-salary-spotify">
                                <div class="location-spotify">
                                    <span class="icon-spotify">📍</span>
                                    <span>Banten City</span>
                                </div>
                                <div class="salary-spotify">
                                    <span class="icon-spotify">💲</span>
                                    <span>$130k-$160k</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </section>

                <section class="why-choose-us">
                    <!-- Bagian Gambar -->
                    <figure class="image-container">
                        <img src="/Source/bisnis-partner.png" alt="Partnership Image" class="main-image">
                        <figcaption class="partnership-text">Partnership with Glassdoor and LinkedIn</figcaption>
                    </figure>
                    
                    <!-- Bagian Teks -->
                    <article class="text-container">
                        <header>
                            <h5 class="section-title">WHY CHOOSE US</h5>
                            <h2 class="main-heading">Build a custom membership site with locked content.</h2>
                        </header>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a mi rhoncus, pharetra leo et, efficitur tortor. Fusce vel convallis magna, sit amet pulvinar diam. Sed laoreet feugiat consequat.</p>
                        
                        <!-- Daftar Fitur -->
                        <ul class="features">
                            <li class="feature-item">
                                <img src="/Source/icon.png" alt="Feature Icon" class="feature-icon">
                                <span>
                                    <p class="feature-title">Add a feature point here</p>
                                    <p class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </span>
                            </li>
                            
                            <li class="feature-item">
                                <img src="/Source/icon.png" alt="Feature Icon" class="feature-icon">
                                <span>
                                    <p class="feature-title">Add a feature point here</p>
                                    <p class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </span>
                            </li>
                
                            <li class="feature-item">
                                <img src="/Source/icon.png" alt="Feature Icon" class="feature-icon">
                                <span>
                                    <p class="feature-title">Add a feature point here</p>
                                    <p class="feature-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </span>
                            </li>
                        </ul>
                    </article>
                </section>

                <section class="testimonial-section">
                    <header>
                        <h5 class="section-title">TESTIMONIAL</h5>
                        <h2 class="main-heading">See what users say about our job platform</h2>
                    </header>
                
                    <div class="testimonial-container">
                        <button class="prev-btn" onclick="prevTestimonial()">&#10094;</button>
                
                        <!-- Slide 1 -->
                        <div class="testimonial-slide active">
                            <div class="testimonial-content">
                                <figure class="testimonial-icon">
                                    <img src="/Source/icon-monkey.png" alt="User Icon" class="testimonial-user-icon">
                                </figure>
                                <blockquote class="testimonial-text">
                                    <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a mi rhoncus, pharetra leo et, efficitur tortor Fusce vel convallis magna”</p>
                                    <footer>
                                        <span class="testimonial-author">Keluarga Angkat</span><span class="testimonial-position">  - Senior Fullstack Developer</span>
                                    </footer>
                                </blockquote>
                            </div>
                            <figure class="testimonial-image-container">
                                <img src="/Source/testimonial.png" alt="User Image" class="testimonial-image">
                            </figure>
                        </div>
                
                        <!-- Slide 2 -->
                        <div class="testimonial-slide">
                            <div class="testimonial-content">
                                <figure class="testimonial-icon">
                                    <img src="/Source/icon-elephant.png" alt="User Icon" class="testimonial-user-icon">
                                </figure>
                                <blockquote class="testimonial-text">
                                    <p>“Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.”</p>
                                    <footer>
                                        <span class="testimonial-author">Jane Doe</span> - <span class="testimonial-position">Product Manager</span>
                                    </footer>
                                </blockquote>
                            </div>
                            <figure class="testimonial-image-container">
                                <img src="/Source/testimonial2.png" alt="User Image" class="testimonial-image">
                            </figure>
                        </div>
                
                        <!-- Slide 3 -->
                        <div class="testimonial-slide">
                            <div class="testimonial-content">
                                <figure class="testimonial-icon">
                                    <img src="/Source/icon-tiger.png" alt="User Icon" class="testimonial-user-icon">
                                </figure>
                                <blockquote class="testimonial-text">
                                    <p>“At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque.”</p>
                                    <footer>
                                        <span class="testimonial-author">John Smith</span> - <span class="testimonial-position">UX Designer</span>
                                    </footer>
                                </blockquote>
                            </div>
                            <figure class="testimonial-image-container">
                                <img src="/Source/testimonial3.png" alt="User Image" class="testimonial-image">
                            </figure>
                        </div>
                
                        <button class="next-btn" onclick="nextTestimonial()">&#10095;</button>
                    </div>
                </section>
                                             


                <!-- Kursus -->
                <section class="latest-courses">
                    <header>
                        <h5 class="section-subtitle">KURSUS</h5>
                        <h2 class="section-title-courses">Get the latest news about course!</h2>
                    </header>
                
                    <div class="course-cards-wrapper">
                        <div class="course-cards">
                            <article class="course-card">
                                <figure class="course-image"></figure>
                                <div class="course-info">
                                    <span class="course-category">Business</span>
                                    <h3 class="course-title">Finding employees in the gig economy</h3>
                                    <time class="course-date">January 22, 2025</time>
                                    <a href="#" class="course-link">Read More ➔</a>
                                </div>
                            </article>
                            <!-- Duplicate course-card untuk total 5 card -->
                            <article class="course-card">
                                <figure class="course-image"></figure>
                                <div class="course-info">
                                    <span class="course-category">Business</span>
                                    <h3 class="course-title">Finding employees in the gig economy</h3>
                                    <time class="course-date">January 22, 2025</time>
                                    <a href="#" class="course-link">Read More ➔</a>
                                </div>
                            </article>
                            <article class="course-card">
                                <figure class="course-image"></figure>
                                <div class="course-info">
                                    <span class="course-category">Business</span>
                                    <h3 class="course-title">Finding employees in the gig economy</h3>
                                    <time class="course-date">January 22, 2025</time>
                                    <a href="#" class="course-link">Read More ➔</a>
                                </div>
                            </article>
                            <article class="course-card">
                                <figure class="course-image"></figure>
                                <div class="course-info">
                                    <span class="course-category">Business</span>
                                    <h3 class="course-title">Finding employees in the gig economy</h3>
                                    <time class="course-date">January 22, 2025</time>
                                    <a href="#" class="course-link">Read More ➔</a>
                                </div>
                            </article>
                            <article class="course-card">
                                <figure class="course-image"></figure>
                                <div class="course-info">
                                    <span class="course-category">Business</span>
                                    <h3 class="course-title">Finding employees in the gig economy</h3>
                                    <time class="course-date">January 22, 2025</time>
                                    <a href="#" class="course-link">Read More ➔</a>
                                </div>
                            </article>
                        </div>
                    </div>
                </section>
                
                
                <section class="explore-course">
                    <div class="explore-content">
                        <figure class="explore-icon">
                            <img src="/Source/user-search.png" alt="Explore Icon">
                        </figure>
                        <h2>Explore a course now!</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rhoncus pharetra cursus. Suspendisse sodales porta leo, ac placerat ex pretium quis.</p>
                    </div>
                    <div class="explore-bottom">
                        <a href="#" class="explore-btn">Explore Now</a>
                    </div>
                </section> 
            </div>

            <!-- Footer -->
 <footer class="footer">
    <div class="footer-container">
        <!-- Logo Section -->
        <div class="footer-logo">
            <img src="/Source/EduEmpower Logo.png" alt="EduEmpower Logo">
        </div>

        <!-- Menu Sections -->
        <div class="footer-menu">
            <div class="menu-column">
                <h4>Pages</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Lowongan/Magang</a></li>
                    <li><a href="#">Kursus</a></li>
                </ul>
            </div>
            
            <div class="menu-column">
                <h4>Account</h4>
                <ul>
                    <li><a href="#">Sign In</a></li>
                    <li><a href="#">Sign Up</a></li>
                    <li><a href="#">Profil Perusahaan</a></li>
                </ul>
            </div>
        </div>

        <!-- Newsletter Section -->
        <div class="footer-newsletter">
            <h4>SIGNUP TO OUR NEWSLETTER</h4>
            <div class="newsletter-form">
                <input type="email" placeholder="Email Address">
                <button type="submit">Subscribe</button>
            </div>
        </div>
    </div>

    <!-- Copyright Section -->
    <div class="footer-copyright">
        <p class="copyright-text">&copy; EduEmpower. All Right Reserved 2024.</p>
    </div>
</footer>           
            <script src="/Js/script.js"></script>
            <script src="/Js/slide.js"></script>
        </body>
    </html> 