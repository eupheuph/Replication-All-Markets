<div class="top-bar">
    <div class="container flex-between">
        <div class="social-icons">
            <i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> 
            <i class="fab fa-youtube"></i> <i class="fab fa-linkedin-in"></i>
        </div>
        <div class="top-right">
            <a href="<?php echo base_url('auth/login'); ?>">Login</a>
            <a href="<?php echo base_url('auth/register'); ?>">Register</a>
            <span><i class="fas fa-shopping-cart"></i> Cart(<?php echo $cart_count; ?>)</span>
            <select class="top-select">
                <option selected>Select Language</option>
                <option><?php echo html_escape($current_language); ?></option>
                <option>Swahili</option>
            </select>
            <select class="top-select country-select">
               <option><?php echo isset($current_country) ? $current_country : 'Select Country'; ?></option>
               <option>Kenya</option>
               <option>Uganda</option>
               <option>Tanzania</option>
            </select>
        </div>
    </div>
</div>

<nav class="main-nav">
    <div class="container flex-between">
        <div class="logo-area">
            <img src="https://cdn.vectorstock.com/i/1000v/31/67/globe-icon-editable-earth-logo-vector-23733167.jpg" alt="Logo">
            <div>
                <strong>Allmarkets</strong><br>
                <small>Training And Trading In Everything</small>
            </div>
        </div>

        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li class="has-dropdown">
                Education ▾
                <ul class="dropdown-menu">
                    <li><a href="#">QBANKS FOR GRADUATES</a></li>
                    <li><a href="#">EXAMS WHILE IN SCHOOL</a></li>
                    <li><a href="#">E-BOOKS</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
            </li>
            <li><a href="#">Jobs available</a></li>
            <li class="has-dropdown">
                Match making ▾
                <ul class="dropdown-menu">
                    <li><a href="#">Dating</a></li>
                    <li><a href="#">Study Partners</a></li>
                    <li><a href="#">Mentorship</a></li>
                    <li><a href="#">Business & Investors</a></li>
                    <li><a href="#">Professional Collaboration</a></li>
                    <li><a href="#">All Market Conferencing</a></li>
                </ul>
            </li>
            <li class="has-dropdown">
                Games ▾
                <ul class="dropdown-menu">
                    <li><a href="#">Chess</a></li>
                    <li><a href="#">Eureka</a></li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}
.flex-between {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.top-bar {
    background: #222;
    color: white;
    padding: 10px 0;
    font-family: sans-serif;
    font-size: 13px;
}
.top-right {
    display: flex;
    gap: 20px;
    align-items: center;
}
.top-right a {
    color: white;
    text-decoration: none;
}
.top-select {
    background: #333;
    color: white;
    border: 1px solid #444;
    padding: 2px 5px;
}

.main-nav {
    background: white;
    padding: 15px 0;
    border-bottom: 1px solid #eee;
    font-family: sans-serif;
}
.logo-area {
    display: flex;
    align-items: center;
    gap: 10px;
}
.logo-area img { height: 50px; }
.logo-area strong { font-size: 1.7rem; color: #0056b3; }

.nav-links {
    list-style: none;
    display: flex;
    gap: 25px;
    margin: 0;
    padding: 0;
}
.nav-links > li {
    font-weight: bold;
    font-size: 14px;
    text-transform: uppercase;
    position: relative; 
    cursor: pointer;
    padding: 10px 0;
}
.nav-links a {
    text-decoration: none;
    color: inherit;
}

.dropdown-menu {
    display: none; 
    position: absolute;
    top: 100%;
    left: 0;
    background-color: #2a2a2a; 
    min-width: 230px;
    list-style: none;
    padding: 0;
    margin: 0;
    z-index: 1000;
    text-transform: none; 
    font-weight: normal;
}

.dropdown-menu li {
    border-bottom: 1px solid #3a3a3a;
}

.dropdown-menu li a {
    color: white;
    display: block;
    padding: 12px 20px;
    transition: background 0.2s;
}

.dropdown-menu li a:hover {
    background-color: #333;
}

.has-dropdown:hover .dropdown-menu {
    display: block;
}
    </style>