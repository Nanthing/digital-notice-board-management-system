<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php
    session_start();
    ?>

    <div class="wrapper">
        <header>
            <div class="container">
            <div class="logo">
                    <img src="logo.png" alt="Logo" class="logo-image"> 
                </div>
                <nav>
                    
                    <ul>
                    <li><a href="index.php" class="nav-link"><i class="fa fa-home"></i><span>Home</span></a></li>
                        <li><a href="about.html" class="nav-link"><i class="fa-solid fa-info"></i><span>About us</span></a></li>
                        <li><a href="services.html" class="nav-link"><i class="fa fa-cogs"></i><span>Services</span></a></li>
                        <li><a href="contact.html" class="nav-link"><i class="fa fa-envelope"></i><span>Contact</span></a></li>
                        <?php if (isset($_SESSION['username'])): ?>
                            <li><a href="#" id="user-icon" class="nav-link"><i class="fa fa-user"></i><span><?php echo htmlspecialchars($_SESSION['username']); ?></span></a></li>
                            <li><a href="logout.php" class="nav-link"><i class="fa fa-sign-out-alt"></i><span>Logout</span></a></li>
                        <?php else: ?>
                            <li><a href="#" id="login-btn" class="nav-link"><i class="fa fa-sign-in-alt"></i><span>Login</span></a></li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </header>
        <marquee class="announcement">
            Welcome to the Digital Notice board web! Stay tuned for updates and exciting content.
        </marquee>
        <main>
            <section class="notice-board">
                
                <div class="table-container">
                    <table class="notice-table">
                        <thead>
                            <tr>
                                
                                <th>Notice</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            
                               <td><a href="software engineering.pdf"><b>Website launch event at 10 AM.</b></a></td>
                            </tr>
                            <tr>
                                
                                <td><a href="exam.pdf"><b>Maintenance scheduled from 1 AM to 3 AM.</b></a></td>
                            </tr>
                            <tr>
                                
                                <td><a href="revise.pdf"><b>New feature release: User Profiles.</b></a></td>
                            </tr>
                            <tr>
                                <td ><a href="scholl.jpeg"><b>Regarding University Dress Code</b></a></td>
                            </tr>
                            <tr>
                                <td><a href="coll.jpeg"><b> University Reopening For PG and UG</b></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
    </div>
    <footer>
        <p>&copy; 2024 web base Notice board. All rights reserved.</p>
    </footer>

   
    <div id="auth-forms" class="auth-forms">
        <div class="form-container">
            <form id="login-form" action="login.php" method="post" class="active">
                <h2>Login</h2>
                <label for="login-username">Username:</label>
                <input type="text" id="login-username" name="username" required>
                <label for="login-password">Password:</label>
                <input type="password" id="login-password" name="password" required>
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="#" id="switch-to-signup">Sign Up</a></p>
            </form>
            <form id="signup-form" action="signup.php" method="post">
                <h2>Sign Up</h2>
                <label for="signup-username">Username:</label>
                <input type="text" id="signup-username" name="username" required>
                <label for="signup-password">Password:</label>
                <input type="password" id="signup-password" name="password" required>
                <button type="submit">Sign Up</button>
                <p>Already have an account? <a href="#" id="switch-to-login">Login</a></p>
            </form>
        </div>
    </div>

    <script src="scripts.js"></script>
</body>
</html>
