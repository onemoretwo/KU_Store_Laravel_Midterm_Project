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



<h2 align="center" style="font-size: 50px; font-weight: bold;">Redeem Reward</h2>
<h4 align="center" style="font-size: 40px;margin-top: 20px">Your point: <?= $current_user->point ?></h4>
<div class="container mb-5 mt-5">
    <div class="pricing card-deck flex-column flex-md-row mb-3">
        <div class="card card-pricing text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Premium</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="15">Discount 20%</h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Use 750 points.</li>
                    
                </ul>
                <button type="button" class="btn btn-primary btn-redeem" data-toggle="modal" data-target="#exampleModalpremium">
  Redeem now
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalpremium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Redeem Reward</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure to use your points?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="reward/getCoupon/premium" method="post"><button type="submit" class="btn btn-primary">Redeem</button></form>
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
        <div class="card card-pricing popular shadow text-center px-3 mb-4">
            <span class="h6 w-60 mx-auto px-4 py-1 rounded-bottom bg-primary text-white shadow-sm">Normal</span>
            <div class="bg-transparent card-header pt-4 border-0">
                <h1 class="h1 font-weight-normal text-primary text-center mb-0" data-pricing-value="30">Discount 500 ฿</span></h1>
            </div>
            <div class="card-body pt-0">
                <ul class="list-unstyled mb-4">
                    <li>Use 250 points</li>
                    
                </ul>
                <button type="submit" class="btn btn-primary btn-redeem" data-toggle="modal" data-target="#exampleModalnormal">Redeem now</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalnormal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Redeem Reward</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are you sure to use your points?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="reward/getCoupon/normal"><button type="submit" class="btn btn-primary">Redeem</button></form>
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
        
        
    </div>
</div>

