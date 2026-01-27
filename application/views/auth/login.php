<div class="login-container" style="max-width: 400px; margin: 50px auto; padding: 20px; border: 1px solid #eee; font-family: sans-serif; text-align: center;">
    <h2 style="color: #333;">Login to your Account</h2>
    
    <?php if($this->session->flashdata('error')): ?>
        <p style="color: red;"><?php echo $this->session->flashdata('error'); ?></p>
    <?php endif; ?>

    <form action="<?php echo base_url('auth/login'); ?>" method="POST">
        <input type="email" name="email" placeholder= "email@gmail.com" required 
               style="width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ccc; background: #e8f0fe; box-sizing: border-box;">
        
        <input type="password" name="password" placeholder="********" required 
               style="width: 100%; padding: 12px; margin: 10px 0; border: 1px solid #ccc; background: #e8f0fe; box-sizing: border-box;">

        <button type="submit" style="width: 100%; padding: 12px; background: #0056b3; color: white; border: none; font-weight: bold; cursor: pointer; margin-top: 10px;">
            SIGN IN
        </button>
    </form>

    <div style="margin-top: 20px; display: flex; justify-content: space-between; font-size: 14px;">
        <a href="#" style="color: #333; text-decoration: none;">Supplier Login</a>
        <a href="#" style="color: #333; text-decoration: none;">Forgot Password?</a>
    </div>

    <div style="margin-top: 20px; font-size: 14px;">
        Don't have account yet? <a href="<?php echo base_url('register'); ?>" style="color: #0056b3; text-decoration: none;">Register</a>
    </div>
</div>

