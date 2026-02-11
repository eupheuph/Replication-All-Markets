<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-column">
            <h4 class="footer-heading">Markets</h4>
            <p class="footer-text">No market found in your region</p>
        </div>

        <div class="footer-column">
            <h4 class="footer-heading">Goods for Sale</h4>
            <p class="footer-text">No goods found in your region</p>
        </div>

        <div class="footer-column">
            <h4 class="footer-heading">Jobs</h4>
            <p class="footer-text">No job found in your region</p>
        </div>

        <div class="footer-column">
            <h4 class="footer-heading">Resources</h4>
            <ul class="footer-links">
                <li><a href="#">Support</a></li>
                <li><a href="#">FAQs</a></li>
                <li><a href="#">Register as Supplier</a></li>
                <li><a href="#">Contact Details</a></li>
                <li><a href="#">Buy Pins for Payments</a></li>
            </ul>
        </div>

        <div class="footer-column subscribe-col">
            <h4 class="footer-heading">Subscribe</h4>
            <form action="<?php echo base_url('home/subscribe'); ?>" method="POST" class="subscribe-form">
                <input type="email" name="email" placeholder="Email" required>
                <button type="submit">Subscribe</button>
            </form>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="bottom-container">
            <p>Copyright © 2021 All rights reserved.</p>
            <div class="footer-socials">
                <a href="#"><i class="fab fa-linkedin"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </div>
</footer>
<style>
    /* Main footer */
.site-footer {
    background-color: #1a237e;
    color: #ffffff;
    padding: 40px 0 0 0; 
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.footer-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 0 20px;
    gap: 30px;
}
.footer-column {
    flex: 1;
    min-width: 200px;
    margin-bottom: 30px;
}

.subscribe-col {
    min-width: 280px;
}

.footer-heading {
    font-size: 18px;
    margin-bottom: 20px;
    font-weight: 600;
}

.footer-text {
    font-size: 14px;
    opacity: 0.8;
    line-height: 1.6;
}

.footer-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: white;
    text-decoration: none;
    font-size: 14px;
    opacity: 0.8;
    transition: opacity 0.3s ease;
}

.footer-links a:hover {
    opacity: 1;
    text-decoration: underline;
}

.subscribe-form {
    display: flex;
    height: 40px;
}

.subscribe-form input {
    padding: 0 15px;
    border: none;
    border-radius: 4px 0 0 4px;
    width: 100%;
    outline: none;
}

.subscribe-form button {
    background-color: #007bff;
    color: white;
    border: none;
    padding: 0 20px;
    border-radius: 0 4px 4px 0;
    cursor: pointer;
    font-weight: bold;
    transition: background 0.3s;
}

.subscribe-form button:hover {
    background-color: #0056b3;
}

.footer-bottom {
    background: #0d123d;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    padding: 20px 0;
    margin-top: 10px;
}

.bottom-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 20px;
    font-size: 13px;
    opacity: 0.8;
}

.footer-socials {
    display: flex;
    gap: 15px;
}

.footer-socials a {
    color: white;
    font-size: 18px;
    transition: transform 0.2s ease;
}

.footer-socials a:hover {
    transform: translateY(-3px);
}

@media (max-width: 768px) {
    .bottom-container {
        flex-direction: column;
        gap: 15px;
        text-align: center;
    }
}
</style>