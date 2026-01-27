<div class="container my-5">
    <h2>Welcome, <?= $this->session->userdata('name') ?>!</h2>
    <p>You are logged in.</p>
    <a href="<?= base_url('auth/logout') ?>" class="btn btn-danger">Logout</a>
</div>
