<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gazel Store Global Services Limited</title>
    <link rel="stylesheet" href="{{asset('landing/css/index.css')}}">
    <link rel="icon" href="{{asset('landing/img/gazelmainlogo.png')}}">
</head>
<body>
    <div class="container">
        <nav>
            <div class="logo">
                <img src="/img/gazelmainlogo.png" alt="">
            </div>
            <div class="nav-buttons">
                <a href="login.html" class="btn btn-login">Login</a>
                <a href="login.html" class="btn btn-primary">Get Started</a>
            </div>
        </nav>

        <section class="hero">
            <div class="hero-content">
                <h1>Manage Your Drink Business with Ease</h1>
                <p>Real-time order tracking, inventory management, and seamless delivery coordination all in one powerful platform.</p>
                <div class="hero-buttons">
                    <a href="login.html" class="btn btn-primary btn-large">Get Started Free</a>
                    <a href="login.html" class="btn btn-login btn-large">Login to Dashboard</a>
                </div>
            </div>

            <div class="hero-visual">
                <div class="dashboard-preview">
                    <div class="preview-header">
                        <div class="preview-dot dot-red"></div>
                        <div class="preview-dot dot-yellow"></div>
                        <div class="preview-dot dot-green"></div>
                    </div>
                    <div class="preview-content">
                        <div class="preview-bar"></div>
                        <div class="preview-bar"></div>
                        <div class="preview-bar"></div>
                        <div class="preview-bar"></div>
                    </div>
                </div>
                <div class="floating-element float-1">📦 New Order</div>
                <div class="floating-element float-2">🚚 On the way</div>
            </div>
        </section>

        <section class="features">
            <div class="feature-card">
                <div class="feature-icon">📊</div>
                <h3>Real-Time Dashboard</h3>
                <p>Monitor all orders, inventory levels, and delivery status from one centralized dashboard.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🚚</div>
                <h3>Delivery Tracking</h3>
                <p>Assign drivers, track deliveries, and update customers on their order status instantly.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">📱</div>
                <h3>Order Management</h3>
                <p>Accept, confirm, and process customer orders with just a few clicks.</p>
            </div>
        </section>
    </div>

    <script>
        // Add smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const href = this.getAttribute('href');

                // Here you would redirect to your actual pages
                if (href === '#login') {
                    alert('Redirecting to login page...\n(You will create this page next)');
                    // window.location.href = 'login.html';
                } else if (href === '#get-started') {
                    alert('Redirecting to registration page...\n(You will create this page next)');
                    // window.location.href = 'register.html';
                }
            });
        });
    </script>
</body>
</html>
