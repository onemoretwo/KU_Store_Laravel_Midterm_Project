<?php use App\Framework\Utilities\Session; ?>
<?php use App\Models\User; ?>
<?php $auth = Session::read('Auth'); ?>
<?php $image_path = (new User())->find_user($auth['username'])[0]->image_path; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <link rel="stylesheet" href="<?= $this->asset('/css/bootstrap-4.4.1/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= $this->asset('/css/cart-style.css') ?>">
    <link rel="stylesheet" href="<?= $this->asset('/css/fontawesome-free-5.12.0-web/css/all.min.css') ?>">
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-pink navbar-dark">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="/home"><span class="fas fa-home"></span><span class="link">Home</span></a>
      
        <div class="navbar-collapse collapse">
        <!-- Links -->
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/reward"><span class="fas fa-gift"></span><span class="link">Point & Reward</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/cart"><span class="fas fa-shopping-cart"></span><span class="link">My cart</span></a>
            </li>
          </ul>
        </div>
  
        <span class="user">
          <img src="<?= $image_path ?>" alt="">ID : <?= $auth['username']; ?>
        </span>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-chevron-circle-down"></i>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <?php if ($auth['role'] == 'admin') :?>
              <a class="dropdown-item" href="/ban">Active/Ban</a>
              <a class="dropdown-item" href="/dash">Manage</a>
              <hr>
              <?php endif; ?>
            <a class="dropdown-item" href="/edit">Edit Profile</a>
            <hr>
            <a class="dropdown-item" href="/login/logout">Logout</a>
          </div>
        </div>
      </div>
    </nav>


    <?= $this->section('content') ?>

    <footer class="footer-area">
    <div class="container h-100">
      <div class="footer-icon">
        <a href=""><span class="fas fa-store-alt"></span></span><span class="link">Location</span></a>
        <a href=""><span class="fas fa-id-card"></span></span><span class="link">Contact Us</span></a>
        <a href=""><span class="fas fa-user-tie"></span></span><span class="link">Director</span></a>
      </div>
    </div>
  </footer>

  <script src="<?= $this->asset('/js/jquery-3.4.1.min.js') ?>"></script>
    <script src="<?= $this->asset('/js/bootstrap-4.4.1/bootstrap.min.js') ?>"></script>

</body>
</html>
