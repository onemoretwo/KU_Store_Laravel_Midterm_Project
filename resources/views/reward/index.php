<?php $this->layout('layouts/app'); ?>
<link rel="stylesheet" href="<?= $this->asset('/css/reward-style.css') ?>">
<?php

use App\Framework\Utilities\Session;
use App\Models\User;

$auth = Session::read('Auth');
$current_user = (new User())->find_user($auth['username'])[0];
?>

<header>
  <div class="header-area">
    <div class="header-logo">
      <img src="/images/logo2.png" alt="">
    </div>
  </div>
</header>

<div class="border-bot">
  <div class="header-bar bg-header">
    <h1>REWARD</h1>
  </div>
</div>

<section class="section-form border-bot">
  <div class="container item-center">
    <h3>Ranking Board</h3>
    <div class="container">
      <table class="table table-hover">
        <thead>
          <tr>
            <th></th>
            <th>Name</th>
            <th>Point</th>
          </tr>
        </thead>
        <tbody>
          <!-- top 5 rank point user can only see -->
          <?php foreach ($users as $user) : ?>

            <tr>
              <td><span class="user"><img src="<?= $user->image_path ?>" alt=""></span></td>
              <td><?= $user->username ?></td>
              <td><?= $user->point ?></td>
            </tr>

          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section-form">
  <div class="row container">
    <div class="col-12 col-lg-4" style="border-right: 2px solid #dddee9">
      <div class="myPoint">
        <img src="<?= $current_user->image_path ?>" alt="">
        <h4 style="display: inline-block"><?= $current_user->username ?></h4>
        <p style="font-size: 18px;"><br> You have point : <?= $current_user->point ?></p>
      </div>
    </div>
    <div class="col-12 col-lg-8 flex-dis">
      <div class="container" style="width: 50%">
        <div class="row justify-content-center">
          <form action="">
            <a href="#" class="btn btn-warning" role="button">discount 50%</a>

          </form>
        </div>
      </div>
      <div class="contaier" style="width: 50%">
        <div class="row justify-content-center">
          <form action="">
            <a href="#" class="btn btn-warning" role="button">discount 50%</a>

          </form>
        </div>

      </div>
      <!-- <div class="container">
              <div class="row">
             <div class="col-md-6">
      <form action="">
                  <a href="#" class="btn btn-warning" role="button">discount 50%</a>
                 
                  </form></div>
    
    
    <div class="col"> 
      <form action="">
                  <a href="#" class="btn btn-danger" role="button">discount 500 ฿</a>
                 
                  </form>
                </div>
    
  </div>
</div>
             
                <div class="coupon-code">
                  hello2
                </div>
              </div>
                 -->
    </div>
  </div>
</section>