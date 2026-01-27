<div style="background: #222; color: white; padding: 10px 0; font-family: sans-serif; font-size: 13px;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; padding: 0 20px;">
        <div class="social-icons">
            <i class="fab fa-facebook-f"></i> <i class="fab fa-twitter"></i> <i class="fab fa-youtube"></i> <i class="fab fa-linkedin-in"></i>
        </div>
        <div style="display: flex; gap: 20px; align-items: center;">
            <a href="<?php echo base_url('auth/login'); ?>" style="color: white; text-decoration: none;">Login</a>
            <a href="<?php echo base_url('auth/register'); ?>" style="color: white; text-decoration: none;">Register</a>
            <span><i class="fas fa-shopping-cart"></i> Cart(<?php echo $cart_count; ?>)</span>
            <select>
            <option selected>Select Language</option>
            <option><?php echo html_escape($current_language); ?></option>
            <option>Swahili</option>
        </select>

            <select style="background: #333; color: white; border: 1px solid #444; padding: 2px 5px;">
               <?php echo isset($current_country) ? $current_country : 'Select Country'; ?>
            <option>Kenya</option>
            <option>Uganda</option>
            <option>Tanzania</option>
            <option>Ethiopia</option>
            <option>Rwanda</option>
            <option>Burundi</option>
            <option>Sudan</option> 
            </select>
        </div>
    </div>
</div>

<nav style="background: white; padding: 20px 0; border-bottom: 1px solid #eee; font-family: sans-serif;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; padding: 0 20px;">
        <div style="display: flex; align-items: center; gap: 10px;">
            <img src="<?php echo base_url('assets/logo.png'); ?>" alt="Logo" style="height: 50px;">
            <div>
                <strong style="font-size: 1.7rem; font-weight: bold; color: #0056b3">Allmarkets</strong><br>
                <small style=" font-size: 0.8rem; color: black;">Training And Trading In Everything</small>
            </div>
        </div>
        <ul style="list-style: none; display: flex; gap: 20px; font-weight: bold; font-size: 14px; text-transform: uppercase;">
            <li>Home</li>
            <li>About</li>
            <li>Education</li>
            <li>Jobs Available</li>
            <li>Goods For Sale</li>
            <li>Services</li>
            <li>Market</li>
            <li>Match making</li>
            <li>Games</li>
        </ul>
    </div>
</nav>