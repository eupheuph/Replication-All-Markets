<footer style="background-color: #1a237e; color: #ffffff; padding: 40px 0 20px 0; font-family: sans-serif;">
    <div style="max-width: 1200px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; padding: 0 20px;">
        
        <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
            <h4 style="font-size: 18px; margin-bottom: 20px;">Markets</h4>
            <p style="font-size: 14px; opacity: 0.8; line-height: 1.6;">No market found in your region</p>
        </div>

        <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
            <h4 style="font-size: 18px; margin-bottom: 20px;">Goods for Sale</h4>
            <p style="font-size: 14px; opacity: 0.8; line-height: 1.6;">No goods found in your region</p>
        </div>

        <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
            <h4 style="font-size: 18px; margin-bottom: 20px;">Jobs</h4>
            <p style="font-size: 14px; opacity: 0.8; line-height: 1.6;">No job found in your region</p>
        </div>

        <div style="flex: 1; min-width: 200px; margin-bottom: 20px;">
            <h4 style="font-size: 18px; margin-bottom: 20px;">Resources</h4>
            <ul style="list-style: none; padding: 0; font-size: 14px; opacity: 0.8; line-height: 2;">
                <li><a href="#" style="color: white; text-decoration: none;">Support</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">FAQs</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Register as Supplier</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Contact Details</a></li>
                <li><a href="#" style="color: white; text-decoration: none;">Buy Pins for Payments</a></li>
            </ul>
        </div>

        <div style="flex: 1; min-width: 250px; margin-bottom: 20px;">
            <h4 style="font-size: 18px; margin-bottom: 20px;">Subscribe</h4>
            <form action="<?php echo base_url('home/subscribe'); ?>" method="POST" style="display: flex;">
                <input type="email" name="email" placeholder="Email" required 
                       style="padding: 10px; border: none; border-radius: 4px 0 0 4px; width: 70%;">
                <button type="submit" style="background-color: #007bff; color: white; border: none; padding: 10px 15px; border-radius: 0 4px 4px 0; cursor: pointer;">
                    Subscribe
                </button>
            </form>
        </div>
    </div>

    <div style="border-top: 1px solid rgba(255,255,255,0.1); margin-top: 30px; padding: 20px 20px 0 20px; background: #0d123d;">
        <div style="max-width: 1200px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center; font-size: 13px; opacity: 0.8;">
            <p>Copyright © 2021 All rights reserved.</p>
            <div style="display: flex; gap: 15px;">
                <a href="#" style="color: white; font-size: 16px;"><i class="fab fa-linkedin"></i></a>
                <a href="#" style="color: white; font-size: 16px;"><i class="fab fa-youtube"></i></a>
                <a href="#" style="color: white; font-size: 16px;"><i class="fab fa-twitter"></i></a>
                <a href="#" style="color: white; font-size: 16px;"><i class="fab fa-facebook"></i></a>
            </div>
        </div>
    </div>
</footer>