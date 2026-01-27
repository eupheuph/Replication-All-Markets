<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo isset($page_title) ? html_escape($page_title) : 'Allmarkets'; ?>
    </title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        * { margin:0; padding:0; box-sizing:border-box; }
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            background: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }

        .hero {
            min-height:85vh;
            background: linear-gradient(rgba(0,0,0,0.52), rgba(0,0,0,0.58)),
              url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&q=80&w=2000') center/cover;
            color:white;
            display:flex;
            align-items:center;
            justify-content:center;
            text-align:center;
            padding:0 20px;
        }

        .hero h1 {
            font-size: clamp(2.4rem, 7vw, 4.2rem);
            font-weight:800;
            line-height:1.05;
            margin-bottom:1.4rem;
            text-shadow:0 3px 12px rgba(0,0,0,0.6);
        }

        .hero p { font-size: clamp(1.2rem, 3.5vw, 1.5rem); margin-bottom:2.5rem; }

        .btn-shop {
            background:#dc3545;
            color:white;
            padding:16px 42px;
            border:none;
            border-radius:50px;
            font-size:1.15rem;
            font-weight:600;
            cursor:pointer;
            transition:all 0.3s;
            box-shadow:0 5px 18px rgba(220,53,69,0.4);
        }
        .btn-shop:hover {
            background:#c82333;
            transform:translateY(-4px);
            box-shadow:0 12px 30px rgba(220,53,69,0.5);
        }

        @media (max-width:992px) {
            .nav-menu { display:none; }
        }

        @media (max-width:768px) {
            .top-bar { flex-direction:column; padding:12px 15px; gap:10px; }
            .nav-container { height:68px; }
            .hero { min-height:70vh; }
        }
    </style>
</head>
<body>


<?php if ($this->session->userdata('is_admin')): ?>
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin') ?>">Admin Panel</a>
    </li>
<?php endif; ?>
