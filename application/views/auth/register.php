<div class="register-container" style="max-width: 450px; margin: 40px auto; padding: 30px; border: 1px solid #ddd; border-radius: 4px; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; box-shadow: 0 4px 8px rgba(0,0,0,0.05);">
    <h2 style="text-align: center; color: #333; margin-bottom: 25px;">Register</h2>
    
    <?php echo form_open('auth/register'); ?>
        
        <input type="text" name="first_name" placeholder="Enter first name *" required 
               style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 3px; box-sizing: border-box;">

        <input type="text" name="middle_name" placeholder="Enter middle name" 
               style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 3px; box-sizing: border-box;">

        <input type="text" name="last_name" placeholder="Enter last name*" required 
               style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 3px; box-sizing: border-box;">

        <input type="email" name="email" placeholder="Email Address *" required 
               style="width: 100%; padding: 12px; margin-bottom: 5px; border: 1px solid #ccc; border-radius: 3px; box-sizing: border-box;">
        

        <input type="password" name="password" placeholder="Enter password *" required 
               style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 3px; box-sizing: border-box;">

        <input type="password" name="confirm_password" placeholder="Enter confirm password *" required 
               style="width: 100%; padding: 12px; margin-bottom: 25px; border: 1px solid #ccc; border-radius: 3px; box-sizing: border-box;">

        <button type="submit" style="width: 100%; padding: 14px; background: #0056b3; color: white; border: none; border-radius: 3px; font-weight: bold; cursor: pointer; text-transform: uppercase;">
            SIGN UP
        </button>

    <?php echo form_close(); ?>

    <div style="text-align: center; margin-top: 25px; font-size: 14px; color: #555;">
        Already have account? <a href="<?php echo base_url('auth/login'); ?>" style="color: #333; text-decoration: none; font-weight: 500;">Sign In</a>
    </div>
</div>
