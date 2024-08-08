document.addEventListener('DOMContentLoaded', () => {
    const loginBtn = document.getElementById('login-btn');
    const switchToSignup = document.getElementById('switch-to-signup');
    const switchToLogin = document.getElementById('switch-to-login');
    const authForms = document.getElementById('auth-forms');
    const loginForm = document.getElementById('login-form');
    const signupForm = document.getElementById('signup-form');

    loginBtn.addEventListener('click', () => {
        authForms.classList.add('active');
        loginForm.classList.add('active');
        signupForm.classList.remove('active');
    });

    switchToSignup.addEventListener('click', (e) => {
        e.preventDefault();
        loginForm.classList.remove('active');
        signupForm.classList.add('active');
    });

    switchToLogin.addEventListener('click', (e) => {
        e.preventDefault();
        signupForm.classList.remove('active');
        loginForm.classList.add('active');
    });

    authForms.addEventListener('click', (e) => {
        if (e.target === authForms) {
            authForms.classList.remove('active');
        }
    });
});
document.addEventListener('DOMContentLoaded', function() {
    // Get all table cells
    const cells = document.querySelectorAll('.notice-table td');

    cells.forEach(cell => {
        // Add mouseover event to scale up the bubble
        cell.addEventListener('mouseover', function() {
            cell.classList.add('bubble-pop');
        });

        // Add mouseout event to return the bubble to normal
        cell.addEventListener('mouseout', function() {
            cell.classList.remove('bubble-pop');
        });
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.getElementById('nav-toggle');
    const navbar = document.getElementById('navbar');

    navToggle.addEventListener('click', () => {
        navbar.classList.toggle('active');
    });
});