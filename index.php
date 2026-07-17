<?php
// Website giới thiệu bản thân
$name = "Bạn";
$title = "Web Developer";
$bio = "Tôi là một lập trình viên đam mê công nghệ, luôn tìm tòi những điều mới mẻ và thú vị.";

$skills = [
    ["name" => "PHP", "icon" => "🐘"],
    ["name" => "HTML/CSS", "icon" => "🎨"],
    ["name" => "JavaScript", "icon" => "⚡"],
    ["name" => "MySQL", "icon" => "🗄️"],
    ["name" => "Git", "icon" => "📦"]
];

$projects = [
    ["title" => "Website E-Commerce", "description" => "Nền tảng bán hàng trực tuyến đầy đủ tính năng", "icon" => "🛒"],
    ["title" => "Ứng Dụng Quản Lý", "description" => "Hệ thống quản lý danh bạ và dữ liệu hiệu quả", "icon" => "📱"],
    ["title" => "Blog Cá Nhân", "description" => "Nền tảng blog với giao diện hiện đại", "icon" => "📝"]
];
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - Portfolio</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header/Navigation -->
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <div class="logo">
                    <i class="fas fa-code"></i>
                    <span><?php echo $name; ?></span>
                </div>
                <ul class="nav-links">
                    <li><a href="#about">Về Tôi</a></li>
                    <li><a href="#skills">Kỹ Năng</a></li>
                    <li><a href="#projects">Dự Án</a></li>
                    <li><a href="#contact" class="btn-contact">Liên Hệ</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="container">
                <div class="hero-text">
                    <h1 class="hero-title">Xin chào! <span class="wave">👋</span></h1>
                    <h2 class="hero-subtitle"><?php echo $title; ?></h2>
                    <p class="hero-description"><?php echo $bio; ?></p>
                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary">Xem dự án</a>
                        <a href="#contact" class="btn btn-secondary">Liên hệ tôi</a>
                    </div>
                </div>
                <div class="hero-animation">
                    <div class="floating-box"></div>
                </div>
            </div>
        </div>
    </section>
 
    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">Về Tôi</h2>
            <div class="about-content">
                <div class="about-text">
                    <p>Tôi là một lập trình viên có kinh nghiệm trong phát triển web. Tôi yêu thích tạo ra các ứng dụng web hiệu quả và giao diện người dùng thân thiện.</p>
                    <p>Khi rảnh rỗi, tôi thích tìm hiểu những công nghệ mới và đóng góp cho cộng đồng mã nguồn mở.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="container">
            <h2 class="section-title">Kỹ Năng Chuyên Môn</h2>
            <div class="skills-grid">
                <?php foreach ($skills as $skill): ?>
                    <div class="skill-card">
                        <div class="skill-icon"><?php echo $skill['icon']; ?></div>
                        <h3><?php echo $skill['name']; ?></h3>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="container">
            <h2 class="section-title">Các Dự Án Nổi Bật</h2>
            <div class="projects-grid">
                <?php foreach ($projects as $index => $project): ?>
                    <div class="project-card" style="--delay: <?php echo $index * 0.1; ?>s">
                        <div class="project-icon"><?php echo $project['icon']; ?></div>
                        <h3><?php echo $project['title']; ?></h3>
                        <p><?php echo $project['description']; ?></p>
                        <a href="#" class="project-link">Xem chi tiết <i class="fas fa-arrow-right"></i></a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Liên Hệ Với Tôi</h2>
            <div class="contact-content">
                <div class="contact-card">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <a href="mailto:your@email.com">your@email.com</a>
                </div>
                <div class="contact-card">
                    <i class="fas fa-phone"></i>
                    <h3>Điện Thoại</h3>
                    <a href="tel:+84123456789">+84 123 456 789</a>
                </div>
                <div class="contact-card">
                    <i class="fas fa-linkedin"></i>
                    <h3>LinkedIn</h3>
                    <a href="https://linkedin.com/in/yourprofile" target="_blank">linkedin.com/in/yourprofile</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2026 <?php echo $name; ?>. All rights reserved.</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-github"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>
